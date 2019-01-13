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
    public sealed partial class settingpage : Page
    {
        public settingpage()
        {
            this.InitializeComponent();
        
        }

        private void sb1_Click(object sender, RoutedEventArgs e)
        {
            slist2.Visibility = Visibility.Collapsed;
            if (slist1.Visibility == Visibility.Visible)
            {
                slist1.Visibility = Visibility.Collapsed;
               
            }
            else
            {
                slist1.Visibility = Visibility.Visible;
              
            }
        }

        private void sb2_Click(object sender, RoutedEventArgs e)
        {
            slist1.Visibility = Visibility.Collapsed;
            if (slist2.Visibility == Visibility.Visible)
            {
                slist2.Visibility = Visibility.Collapsed;
               
            }
            else
            {
                slist2.Visibility = Visibility.Visible;
                
            }
        }
        public async void MyMessageBox(string mytext)
        {
            var dialog = new MessageDialog(mytext);
            await dialog.ShowAsync();
        }

        private void sb3_Click(object sender, RoutedEventArgs e)
        {
            MyMessageBox("Please Contact Us on : support@neelstech.net ");
        }
    }
}
