﻿#pragma checksum "E:\CURRENT WORK FOLDER\Babble\Babble\pn.xaml" "{406ea660-64cf-4c82-b6f0-42d48172a799}" "1DFC9E55F042598FC600194621C90D75"
//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by a tool.
//
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace Babble
{
    partial class pn : 
        global::Windows.UI.Xaml.Controls.Page, 
        global::Windows.UI.Xaml.Markup.IComponentConnector,
        global::Windows.UI.Xaml.Markup.IComponentConnector2
    {
        /// <summary>
        /// Connect()
        /// </summary>
        [global::System.CodeDom.Compiler.GeneratedCodeAttribute("Microsoft.Windows.UI.Xaml.Build.Tasks"," 14.0.0.0")]
        [global::System.Diagnostics.DebuggerNonUserCodeAttribute()]
        public void Connect(int connectionId, object target)
        {
            switch(connectionId)
            {
            case 1:
                {
                    this.LayoutRoot = (global::Windows.UI.Xaml.Controls.Grid)(target);
                }
                break;
            case 2:
                {
                    this.inch5 = (global::Windows.UI.Xaml.VisualState)(target);
                }
                break;
            case 3:
                {
                    this.inch6 = (global::Windows.UI.Xaml.VisualState)(target);
                }
                break;
            case 4:
                {
                    this.inch8 = (global::Windows.UI.Xaml.VisualState)(target);
                }
                break;
            case 5:
                {
                    this.inch13 = (global::Windows.UI.Xaml.VisualState)(target);
                }
                break;
            case 6:
                {
                    this.r1 = (global::Windows.UI.Xaml.Controls.RelativePanel)(target);
                }
                break;
            case 7:
                {
                    this.split1 = (global::Windows.UI.Xaml.Controls.SplitView)(target);
                }
                break;
            case 8:
                {
                    global::Windows.UI.Xaml.Controls.ListBox element8 = (global::Windows.UI.Xaml.Controls.ListBox)(target);
                    #line 137 "..\..\..\pn.xaml"
                    ((global::Windows.UI.Xaml.Controls.ListBox)element8).SelectionChanged += this.ListBox_SelectionChanged;
                    #line default
                }
                break;
            case 9:
                {
                    this.setting = (global::Windows.UI.Xaml.Controls.ListBoxItem)(target);
                }
                break;
            case 10:
                {
                    this.reportedbug = (global::Windows.UI.Xaml.Controls.ListBoxItem)(target);
                }
                break;
            case 11:
                {
                    this.about = (global::Windows.UI.Xaml.Controls.ListBoxItem)(target);
                }
                break;
            case 12:
                {
                    this.mainframe = (global::Windows.UI.Xaml.Controls.Frame)(target);
                }
                break;
            case 13:
                {
                    this.t1 = (global::Windows.UI.Xaml.Controls.TextBlock)(target);
                }
                break;
            case 14:
                {
                    this.t2 = (global::Windows.UI.Xaml.Controls.TextBlock)(target);
                }
                break;
            case 15:
                {
                    this.b1 = (global::Windows.UI.Xaml.Controls.Border)(target);
                }
                break;
            case 16:
                {
                    this.devicename = (global::Windows.UI.Xaml.Controls.TextBox)(target);
                }
                break;
            case 17:
                {
                    this.s1 = (global::Windows.UI.Xaml.Controls.TextBlock)(target);
                }
                break;
            case 18:
                {
                    this.pnsex = (global::Windows.UI.Xaml.Controls.ComboBox)(target);
                }
                break;
            case 19:
                {
                    this.enter = (global::Windows.UI.Xaml.Controls.Button)(target);
                    #line 178 "..\..\..\pn.xaml"
                    ((global::Windows.UI.Xaml.Controls.Button)this.enter).Click += this.enter_Click;
                    #line default
                }
                break;
            case 20:
                {
                    this.pninterface = (global::Windows.UI.Xaml.Controls.ComboBox)(target);
                }
                break;
            case 21:
                {
                    this.menustack = (global::Windows.UI.Xaml.Controls.StackPanel)(target);
                }
                break;
            case 22:
                {
                    this.menu = (global::Windows.UI.Xaml.Controls.Button)(target);
                    #line 129 "..\..\..\pn.xaml"
                    ((global::Windows.UI.Xaml.Controls.Button)this.menu).Click += this.menu_Click;
                    #line default
                }
                break;
            case 23:
                {
                    this.guestb = (global::Windows.UI.Xaml.Controls.Button)(target);
                    #line 106 "..\..\..\pn.xaml"
                    ((global::Windows.UI.Xaml.Controls.Button)this.guestb).Click += this.guestb_Click;
                    #line 106 "..\..\..\pn.xaml"
                    ((global::Windows.UI.Xaml.Controls.Button)this.guestb).PointerEntered += this.guestb_PointerEntered;
                    #line 106 "..\..\..\pn.xaml"
                    ((global::Windows.UI.Xaml.Controls.Button)this.guestb).PointerExited += this.guestb_PointerExited;
                    #line default
                }
                break;
            case 24:
                {
                    this.userb = (global::Windows.UI.Xaml.Controls.Button)(target);
                    #line 114 "..\..\..\pn.xaml"
                    ((global::Windows.UI.Xaml.Controls.Button)this.userb).Click += this.userb_Click;
                    #line 114 "..\..\..\pn.xaml"
                    ((global::Windows.UI.Xaml.Controls.Button)this.userb).PointerEntered += this.userb_PointerEntered;
                    #line 114 "..\..\..\pn.xaml"
                    ((global::Windows.UI.Xaml.Controls.Button)this.userb).PointerExited += this.userb_PointerExited;
                    #line default
                }
                break;
            case 25:
                {
                    this.localnetworkb = (global::Windows.UI.Xaml.Controls.Button)(target);
                }
                break;
            default:
                break;
            }
            this._contentLoaded = true;
        }

        [global::System.CodeDom.Compiler.GeneratedCodeAttribute("Microsoft.Windows.UI.Xaml.Build.Tasks"," 14.0.0.0")]
        [global::System.Diagnostics.DebuggerNonUserCodeAttribute()]
        public global::Windows.UI.Xaml.Markup.IComponentConnector GetBindingConnector(int connectionId, object target)
        {
            global::Windows.UI.Xaml.Markup.IComponentConnector returnValue = null;
            return returnValue;
        }
    }
}

