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
    public sealed partial class pnPostPage : Page
    {
        String path;
        SQLite.Net.SQLiteConnection conn;
        public pnPostPage()
        {
            this.InitializeComponent();
            path = Path.Combine(Windows.Storage.ApplicationData.Current.LocalFolder.Path,
     "db.sqlite");
            conn = new SQLite.Net.SQLiteConnection(new
            SQLite.Net.Platform.WinRT.SQLitePlatformWinRT(), path);


            var query = conn.Table<pnTable>();
            int id = 0;
            string name = "";
           

            foreach (var message in query)
            {
                id = message.Id;
                name = message.Name;
               
            }

            pnName.Text = name;

           // conn.DropTable<pnTable>();

        }

        private void TopnDashboard_Click(object sender, RoutedEventArgs e)
        {
            Frame.Navigate(typeof(pndashboard));
        }

        private void ToJoinedDevice_Click(object sender, RoutedEventArgs e)
        {
            MyMessageBox("This is in Development..");
            //Frame.Navigate(typeof(pnJoinedDevice));
        }

        private void pnb1_Click(object sender, RoutedEventArgs e)
        {
            if(pnList.Visibility == Visibility.Visible)
            {
                pnList.Visibility = Visibility.Collapsed;
            }
            else
            {
                pnList.Visibility = Visibility.Visible;
            }
           
        }

        private void pnList_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            if (pnsetting.IsSelected)
            {
            
            }
            if (pnlogout.IsSelected)
            {
                MyMessageBox("You Are Successfully Logout");
                Frame.GoBack();
            }
        }
        public async void MyMessageBox(string mytext)
        {
            var dialog = new MessageDialog(mytext);
            await dialog.ShowAsync();
        }
    }
}
