﻿#pragma checksum "E:\CURRENT WORK FOLDER\Babble\Babble\settingpage.xaml" "{406ea660-64cf-4c82-b6f0-42d48172a799}" "F15E3B5B9B143A6C57A3999DFC92AEB0"
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
    partial class settingpage : 
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
                    this.inch5 = (global::Windows.UI.Xaml.VisualState)(target);
                }
                break;
            case 2:
                {
                    this.inch6 = (global::Windows.UI.Xaml.VisualState)(target);
                }
                break;
            case 3:
                {
                    this.inch8 = (global::Windows.UI.Xaml.VisualState)(target);
                }
                break;
            case 4:
                {
                    this.inch13 = (global::Windows.UI.Xaml.VisualState)(target);
                }
                break;
            case 5:
                {
                    this.sb1 = (global::Windows.UI.Xaml.Controls.Button)(target);
                    #line 66 "..\..\..\settingpage.xaml"
                    ((global::Windows.UI.Xaml.Controls.Button)this.sb1).Click += this.sb1_Click;
                    #line default
                }
                break;
            case 6:
                {
                    this.sb2 = (global::Windows.UI.Xaml.Controls.Button)(target);
                    #line 67 "..\..\..\settingpage.xaml"
                    ((global::Windows.UI.Xaml.Controls.Button)this.sb2).Click += this.sb2_Click;
                    #line default
                }
                break;
            case 7:
                {
                    this.sb3 = (global::Windows.UI.Xaml.Controls.Button)(target);
                    #line 68 "..\..\..\settingpage.xaml"
                    ((global::Windows.UI.Xaml.Controls.Button)this.sb3).Click += this.sb3_Click;
                    #line default
                }
                break;
            case 8:
                {
                    this.slist1 = (global::Windows.UI.Xaml.Controls.ListBox)(target);
                }
                break;
            case 9:
                {
                    this.slist2 = (global::Windows.UI.Xaml.Controls.ListBox)(target);
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

