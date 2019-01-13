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
using SQLite.Net.Attributes;
using Windows.UI.Xaml.Navigation;
using Windows.UI.Popups;

// The Blank Page item template is documented at http://go.microsoft.com/fwlink/?LinkId=234238

namespace Babble
{
    /// <summary>
    /// An empty page that can be used on its own or navigated to within a Frame.
    /// </summary>
    public sealed partial class pn : Page
    {

        String path;
        SQLite.Net.SQLiteConnection conn;
        public pn()
        {
            this.InitializeComponent();
            localnetworkb.Foreground = new SolidColorBrush(Windows.UI.Colors.Black);
            localnetworkb.Background = new SolidColorBrush(Windows.UI.Color.FromArgb(255, 255, 236, 35));
            localnetworkb.BorderBrush = new SolidColorBrush(Windows.UI.Color.FromArgb(255, 255, 236, 35));

            path = Path.Combine(Windows.Storage.ApplicationData.Current.LocalFolder.Path,
         "db.sqlite");
            conn = new SQLite.Net.SQLiteConnection(new
            SQLite.Net.Platform.WinRT.SQLitePlatformWinRT(), path);
            conn.CreateTable<pnTable>();

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
                mainframe.Navigate(typeof(settingpage));
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

        private void guestb_Click(object sender, RoutedEventArgs e)
        {
            Frame.Navigate(typeof(guest));
        }

        private void userb_PointerEntered(object sender, PointerRoutedEventArgs e)
        {
            userb.Background = new SolidColorBrush(Windows.UI.Color.FromArgb(255, 255, 117, 63));
        }

        private void userb_PointerExited(object sender, PointerRoutedEventArgs e)
        {
            userb.Background = new SolidColorBrush(Windows.UI.Colors.Black);
        }

        private void guestb_PointerEntered(object sender, PointerRoutedEventArgs e)
        {
            guestb.Background = new SolidColorBrush(Windows.UI.Color.FromArgb(255, 255, 117, 63));
        }

        private void guestb_PointerExited(object sender, PointerRoutedEventArgs e)
        {
            guestb.Background = new SolidColorBrush(Windows.UI.Colors.Black);
        }

        private void enter_Click(object sender, RoutedEventArgs e)
        {
            if(devicename.Text != "")
            {

                var s = conn.Insert(new pnTable()
                {
                    Name = devicename.Text

                });
                Frame.Navigate(typeof(pnPostPage));
            }
            else
            {
                MyMessageBox("Enter Required Filled");
            }

            
        }
        public async void MyMessageBox(string mytext)
        {
            var dialog = new MessageDialog(mytext);
            await dialog.ShowAsync();
        }
    }
    public class pnTable
    {
        [PrimaryKey, AutoIncrement]
        public int Id { get; set; }
        public string Name { get; set; }
       
        


    }
}
