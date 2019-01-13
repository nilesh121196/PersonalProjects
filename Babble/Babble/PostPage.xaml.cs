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
    public sealed partial class PostPage : Page
    {
        string path;
        SQLite.Net.SQLiteConnection conn;
            
        public PostPage()
        {

            this.InitializeComponent();
            path = Path.Combine(Windows.Storage.ApplicationData.Current.LocalFolder.Path,
            "db.sqlite");
            conn = new SQLite.Net.SQLiteConnection(new
            SQLite.Net.Platform.WinRT.SQLitePlatformWinRT(), path);
            //  conn.CreateTable<Customer>();


            var query = conn.Table<GuestTable>();
            int id = 0;
            string name = "";
            string age = "";

            foreach (var message in query)
            {
                id = message.Id;
                name = message.Name;
                age = message.Age;
            }
       
            Nameof.Text = name;
            //conn.DropTable<GuestTable>();

        }

     

        private void postpagelogout_Click(object sender, RoutedEventArgs e)
        {
            MyMessageBox("You Are Successfully Logout..");
            Frame.GoBack();
        }
        public async void MyMessageBox(string mytext)
        {
            var dialog = new MessageDialog(mytext);
            await dialog.ShowAsync();
        }

        private void button1_Click(object sender, RoutedEventArgs e)
        {
            Frame.Navigate(typeof(ToThis));
        }
    }
    public class Customer
    {
        [PrimaryKey, AutoIncrement]
        public int Id { get; set; }
        public string Name { get; set; }
        public string Age { get; set; }

    }
}

