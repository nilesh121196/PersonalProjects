using System;
using SQLite.Net.Attributes;
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
using System.Net;
using System.Net.Sockets;
using System.Threading;
using System.Text;

// The Blank Page item template is documented at http://go.microsoft.com/fwlink/?LinkId=234238

namespace Babble
{
    /// <summary>
    /// An empty page that can be used on its own or navigated to within a Frame.
    /// </summary>
    public sealed partial class pndashboard : Page
    {
        string path;
        SQLite.Net.SQLiteConnection conn;

   

        //-------------------------------------------------------------------------------------

        //-------------------------------------------------------------------------------------




        public pndashboard()
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

            pnNamed.Text = name;
            localName.Text = name;
           // conn.DropTable<pnTable>();

        }

        private void pnDashBack_Click(object sender, RoutedEventArgs e)
        {
            Frame.GoBack();
        }


        //------------------------------------------------------------------------------------------------------------------------
        private void enableServer_Checked(object sender, RoutedEventArgs e)
        {
            
        }

        private void sendMessageButton_Click(object sender, RoutedEventArgs e)
        {
            if (messageText.Text != "")
            {

                chatBox.Text += localName.Text + ":  " + messageText.Text + "\r\n";

                messageText.Text = "";
            }
            else
            { }
            
        }





        //------------------------------------------------------------------------------------------------------------------------

    }
}
