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
using System.Windows;
using Windows.UI.Popups;

// The Blank Page item template is documented at http://go.microsoft.com/fwlink/?LinkId=234238
namespace Babble
{
    /// <summary>
    /// An empty page that can be used on its own or navigated to within a Frame.
    /// </summary>
        public sealed partial class userlogin : Page
    {
        
        public userlogin()
        {
            this.InitializeComponent();
            userb.Foreground = new SolidColorBrush(Windows.UI.Colors.Black);
            userb.Background = new SolidColorBrush(Windows.UI.Color.FromArgb(255, 255, 236, 35));
            userb.BorderBrush = new SolidColorBrush(Windows.UI.Color.FromArgb(255, 255, 236, 35));
        }
        private void registeruser_Click(object sender, RoutedEventArgs e)
        {
           Frame.Navigate(typeof(registeruser));
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
        private void loginbutton_Click(object sender, RoutedEventArgs e)
        {
            MyMessageBox("This is in Development..");
        }
        private void guestb_Click(object sender, RoutedEventArgs e)
        {
            Frame.Navigate(typeof(guest));
        }

        private void userb_Click(object sender, RoutedEventArgs e)
        {
            Frame.Navigate(typeof(userlogin));
        }

        private void localnetworkb_Click(object sender, RoutedEventArgs e)
        {
            Frame.Navigate(typeof(pn));
        }

        private void guestb_PointerEntered(object sender, PointerRoutedEventArgs e)
        {
            guestb.Background = new SolidColorBrush(Windows.UI.Color.FromArgb(255, 255, 117, 63));
        }

        private void guestb_PointerExited(object sender, PointerRoutedEventArgs e)
        {
            guestb.Background = new SolidColorBrush(Windows.UI.Colors.Black);
        }

        private void localnetworkb_PointerEntered(object sender, PointerRoutedEventArgs e)
        {
            localnetworkb.Background = new SolidColorBrush(Windows.UI.Color.FromArgb(255, 255, 117, 63));
        }

        private void localnetworkb_PointerExited(object sender, PointerRoutedEventArgs e)
        {
            localnetworkb.Background = new SolidColorBrush(Windows.UI.Colors.Black);
        }
        public async void MyMessageBox(string mytext)
        {
            var dialog = new MessageDialog(mytext);
            await dialog.ShowAsync();
        }
    }
    
}
