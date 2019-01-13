using SQLite.Net.Attributes;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Runtime.InteropServices.WindowsRuntime;
using Windows.Foundation;
using Windows.Foundation.Collections;
using Windows.UI.Xaml;
using Windows.UI.Xaml.Controls;
using Windows.UI.Xaml.Controls.Primitives;
using Windows.UI.Xaml.Data;
using Windows.UI.Xaml.Input;
using Windows.UI.Xaml.Media;
using Windows.UI.Xaml.Navigation;
using Windows.UI.Popups;
// The Blank Page item template is documented at http://go.microsoft.com/fwlink/?LinkId=234238
namespace Babble
{ 
   

    /// <summary>
    /// An empty page that can be used on its own or navigated to within a Frame.
    /// </summary>
    public sealed partial class guest : Page
    {
        String path;
        SQLite.Net.SQLiteConnection conn;

        public guest()
        {
            this.InitializeComponent();
            path = Path.Combine(Windows.Storage.ApplicationData.Current.LocalFolder.Path,
            "db.sqlite");
            conn = new SQLite.Net.SQLiteConnection(new
            SQLite.Net.Platform.WinRT.SQLitePlatformWinRT(), path);
            conn.CreateTable<GuestTable>();

           
      
            guestb.Foreground = new SolidColorBrush(Windows.UI.Colors.Black);
            guestb.Background = new SolidColorBrush(Windows.UI.Color.FromArgb(255, 255, 236, 35));
            guestb.BorderBrush = new SolidColorBrush(Windows.UI.Color.FromArgb(255, 255, 236, 35));
        }

        private void menu_Click(object sender, RoutedEventArgs e)
        {
            menu.Background = new SolidColorBrush(Windows.UI.Color.FromArgb(255, 255, 255, 255));
            menu.Foreground = new SolidColorBrush(Windows.UI.Colors.Black);

            split1.IsPaneOpen = !split1.IsPaneOpen;
        }
        private void ListBox_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            if (setting.IsSelected)
            {
                mainframe.Navigate(typeof(settingpage),menustack);
                split1.IsPaneOpen = !split1.IsPaneOpen;
            }
            if (reportedbug.IsSelected)
            {
                mainframe.Navigate(typeof(reportbugpage));
                split1.IsPaneOpen = !split1.IsPaneOpen;
            }
            if (about.IsSelected)
            {
                mainframe.Navigate(typeof(aboutuspage));
                split1.IsPaneOpen = !split1.IsPaneOpen;
            }
        }


        private void userb_Click(object sender, RoutedEventArgs e)
        {
            Frame.Navigate(typeof(userlogin));
        }

        private void localnetworkb_Click(object sender, RoutedEventArgs e)
        {
            Frame.Navigate(typeof(pn));
        }

        private void userb_PointerEntered(object sender, PointerRoutedEventArgs e)
        {
            userb.Background = new SolidColorBrush(Windows.UI.Color.FromArgb(255, 255, 117, 63));
        }

        private void userb_PointerExited(object sender, PointerRoutedEventArgs e)
        {
            userb.Background = new SolidColorBrush(Windows.UI.Colors.Black);
        }

        private void localnetworkb_PointerEntered(object sender, PointerRoutedEventArgs e)
        {
            localnetworkb.Background = new SolidColorBrush(Windows.UI.Color.FromArgb(255, 255, 117, 63));
        }

        private void localnetworkb_PointerExited(object sender, PointerRoutedEventArgs e)
        {
            localnetworkb.Background = new SolidColorBrush(Windows.UI.Colors.Black);
        }

        private void enter_Click(object sender, RoutedEventArgs e)
        {   String t = "";
            if(sexfemale!=null)
            { t = sexfemale.Content.ToString(); }
            var s = conn.Insert(new GuestTable()
            {
                Name = username.Text,
                Age = userage.Text,
                sex = t,
                country = usercountry.PlaceholderText.ToString(),
            });
            if(((username.Text != "") && (userage.Text!="") ) && (((ComboBoxItem)usercountry.SelectedItem).Content.ToString() != "") )
            {
                Frame.Navigate(typeof(PostPage));
            }
            else
            {
                MyMessageBox("Enter Required Details");
            }
           
        }



        public async void MyMessageBox(string mytext)
        {
            var dialog = new MessageDialog(mytext);
            await dialog.ShowAsync();
        }
    }

 


    public class GuestTable
    {
        [PrimaryKey, AutoIncrement]
        public int Id { get; set; }
        public string Name { get; set; }
        public string Age { get; set; }
        public string sex { get; set; }
        public string country { get; set; }


    }

}
