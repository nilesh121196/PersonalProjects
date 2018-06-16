#include <iostream>
#include<cstring>
#include<conio.h>
#include<fstream>
using namespace std;
class rest
{  int k,i,b[10],q[10],v[10];
   int a[32] = {15,10,5,5,5,30,60,90,25,20,5,40,30,55,40,25,30,25,35,30,15,35,25,25,20,5,10,35,25,15,15,20};
   int e=0,c;
   char y1[20],y2[20],y3[100],y4[100];





  string s1= "  PUFF CHEESE PATTY           15 ";   string s16= "  DUM AALO                    25 ";
  string s2= "  PUFF ALOO PATTY             10 ";   string s17= "  IDLI & SAMBAR               30";
  string s3= "  KACHORI                     5  ";   string s18= "  BADA & SAMBAR               25 ";
  string s4= "  SAMOSA                      5  ";   string s19= "  MASALA DOSA                 35";
  string s5= "  INDORI POHA                 5  ";   string s20= "  PLAIN DOSA                  30";
  string s6= "  JALEBI                   30/200gm "; string s21= "  UPMA                        15 ";
  string s7= "  PLAIN PIZZA                 60 ";   string s22= "  CHOLE-BATURAE               35 ";
  string s8= "  MIX PIZZA                   90 ";   string s23= "  CHANNA-SAMOSA               25";
  string s9= "  BURGER                      25";    string s24= "  CHANNA-KULCHA               25";
 string s10= "  SABJI(MIX)                  20 ";   string s25= "  AMRITSARI NHAAN             20";
 string s11= "  TABA ROTI                   5 ";    string s26= "  TANDORI ROTI                5 ";
 string s12= "  CHANA MASALA                40";    string s27= "  SARSON KA SAAG              10";
 string s13= "  KOFTA(GOBHI/AALO)           30 ";   string s28= "  KADAI PANNER                35";
 string s14= "  SPECIAL THALI               55";    string s29= "  LASSHI                      25";
 string s15= "  NORMAL THALI                40";    string s30= "  AALO TIKKI                  15";
                                                    string s31= "  AALO PARANTHA               15";
                                                    string s32= "  PANEER PARANTHA             20";

  string *g[32]={&s1,&s2,&s3,&s4,&s5,&s6,&s7,&s8,&s9,&s10,&s11,&s12,&s13,&s14,&s15,&s16,&s17,&s18,&s19,&s20,&s21,&s22,&s23,&s24,&s25,&s26,&s27,&s28,&s29,&s30,&s31,&s32};

public:

    rest()
    {
        cout<<"\n\t\t\t\t ------------------------------------------------";
        cout<<"\n\t\t\t\t WELCOME IN RESTAURANT ONLINE FOOD BOOKING SYSTEM";
        cout<<"\n\t\t\t\t ------------------------------------------------";
    }
  void  menu()
    {
   cout<<"\n -------------------------------------------------------------------------------------------------------------------------- ";
          	cout<<"\n\t\t\t                          RECIEPE LIST  ";
            cout<<"\n\t\t\t -------------------------------------------------------------------- ";
            cout<<"\n\t\t\t  S.NO  NAME              RATE  | S.NO  NAME              RATE       ";
            cout<<"\n\t\t\t    'STANDARD FOOD & SNACKS'    |           'SOUTH INDIAN'           ";
            cout<<"\n\t\t\t   1   PUFF CHEESE PATTY   15   | 17   IDLI & SAMBAR       30        ";
            cout<<"\n\t\t\t   2   PUFF ALOO PATTY     10   | 18   BADA & SAMBAR       25        ";
            cout<<"\n\t\t\t   3   KACHORI             5    | 19   MASALA DOSA         35        ";
            cout<<"\n\t\t\t   4   SAMOSA              5    | 20   PLAIN DOSA          30        ";
            cout<<"\n\t\t\t   5   INDORI POHA         5    | 21   UPMA                15        ";
            cout<<"\n\t\t\t   6   JALEBI         30/200gm  |------------------------------------";
            cout<<"\n\t\t\t   7   PLAIN PIZZA         60   |             'PUNJABI'              ";
            cout<<"\n\t\t\t   8   MIX PIZZA           90   | 22   CHOLE-BATURAE       35        ";
            cout<<"\n\t\t\t   9   BURGER              25   | 23   CHANNA-SAMOSA       25        ";
            cout<<"\n\t\t\t -------------------------------| 24   CHANNA-KULCHA       25        ";
            cout<<"\n\t\t\t         'GENERAL FOOD'         | 25   AMRITSARI NHAAN     20        ";
            cout<<"\n\t\t\t   10    SABJI(MIX)        20   | 26   TANDORI ROTI        5         ";
            cout<<"\n\t\t\t   11    TABA ROTI         5    | 27   SARSON KA SAAG      10        ";
            cout<<"\n\t\t\t   12    CHANA MASALA      40   | 28   KADAI PANNER        35        ";
            cout<<"\n\t\t\t   13    KOFTA(GOBHI/AALO) 30   | 29   LASSHI              25        ";
            cout<<"\n\t\t\t   14    SPECIAL THALI     55   | 30   AALO TIKKI          15        ";
            cout<<"\n\t\t\t   15    NORMAL THALI      40   | 31   AALO PARANTHA       15        ";
            cout<<"\n\t\t\t   16    DUM AALO          25   | 32   PANEER PARANTHA     20        ";
            cout<<"\n\t\t\t-------------------------------------------------------------------- ";
    cout<<"\n -------------------------------------------------------------------------------------------------------------------------- ";
    }

  void order()
    {
        cout<<"\n\t ENTER ORDER DETAIL \n";
        cout<<"\n\t    YOUR NAME :- ";
        cin.getline(y1,sizeof(y1));

        cout<<"\n\t    MOBILE NO. :- ";
        cin.getline(y2,sizeof(y2));

        cout<<"\n\t    DELIVERY ADDRESS :- ";
        cin.getline(y3,sizeof(y3));
        cout<<"\n\t HOW MANY RECIPIES YOU WANT TO BUY :- ";
        cin>>c;
        for(i=0;i<c;i++)
        {    cout<<"\n\t ENTER SERIAL NO. FOR "<<(i+1)<<" CHOICE :-";
             cin>>b[i];

             cout<<"\n\t HOW MUCH QUANTITY :- ";
             cin>>q[i];

          v[i] =  a[(b[i]-1)];




        }
        cout<<"\n\t  ANY COMMENT(regards spices):- ";

        cin.getline(y4,sizeof(y4));
        cin.getline(y4,sizeof(y4));
    }
    void bill()
    {
        for(i=0;i<c;i++)
        {
           e += v[i]*q[i];
        }


    }
    void show()
    {  fstream file("orders.txt" , ios::in | ios::out | ios::app);
               cout<<"\n                                                   \n";
           cout<<"\n---------------------------------------------------------------------------------------------\n";
               cout<<"\n\t\t BILLING & DELIVERY DETAIL : " << "     ORDER NO. :- #ISR"<<"1"<<c<<e<<v[2];
               cout<<"\n\t\t-----------------------------------------------------------------\n";
               cout<<"\n\t\t CUSTOMER NAME    :-" <<y1;
               cout<<"\n\t\t CUST. MOBILE NO. :-" <<y2;
               cout<<"\n\t\t DELIVERY ADDRESS :-" <<y3;
               cout<<"\n\t\t CUST. COMMENT    :- "<<y4;
               cout<<"\n\t\t\t-----------------------------------------------------\n";
               cout<<"\n\t\t\tS.NO    FOOD NAME                  RATE(Rs.)    QUANTITY \n";


               file<<"\n                                                   \n";
               file<<"\n---------------------------------------------------------------------------------------------\n";
               file<<"\n\t\t BILLING & DELIVERY DETAIL : " << "     ORDER NO. :- #ISR"<<"12"<<c<<e;
               file<<"\n\t\t-----------------------------------------------------------------\n";
               file<<"\n\t\t CUSTOMER NAME    :- "<<y1;
               file<<"\n\t\t CUST. MOBILE NO. :- "<<y2;
               file<<"\n\t\t DELIVERY ADDRESS :- "<<y3;
               file<<"\n\t\t CUST. COMMENT    :- "<<y4;
               file<<"\n\t\t\t-----------------------------------------------------\n";
               file<<"\n\t\t\tS.NO    FOOD NAME                  RATE(Rs.)    QUANTITY \n";

        for(i=0;i<c;i++)
            {
                 k=i+1;
                cout<<"\n\t\t\t"<<k<<"    "<<*g[(b[i]-1)]<<"          "<<q[i]<<endl;
                file<<"\n\t\t\t"<<k<<"    "<<*g[(b[i]-1)]<<"          "<<q[i]<<endl;

            }
                cout<<"\n\t\t\t-----------------------------------------------------\n";
                cout<<"\n\t\t\t  YOUR TOTAL AMOUNT IN RUPEES          "<<e<<endl;
                cout<<"\n\t\t\t-----------------------------------------------------\n";
                cout<<"\n\t YOUR ORDER IS DELIVERED WITH IN 30 MIN ON YOUR ADDRESS \n";
                cout<<"\n\t FURTHER DETAILS PROVIDED ON YOUR MOBILE NUMBER \n";
                cout<<"\n---------------------------------------------------------------------------------------------\n";
                file<<"\n\t\t\t-----------------------------------------------------\n";
                file<<"\n\t\t\t  YOUR TOTAL AMOUNT IN RUPEES         "<<e<<endl;
                file<<"\n\t\t\t-----------------------------------------------------\n";
                file<<"\n---------------------------------------------------------------------------------------------\n";
                file.close();
        }


  ~rest()
  {   cout<<"\n\t\t\t\t ------------------------------------------------";
      cout<<"\n\t\t\t\t               WE HAPPY TO SERVE  ";
      cout<<"\n\t\t\t\t ------------------------------------------------";
      cout<<"\n\t\t\t\t         THANK YOU !! WE SEE YOU AGAIN \n ";

  }




};

int main()
{  char x,y,z;
    rest j;
   cout<<"\n 1:> LOGIN AS CUSTOMER \n"<<"\n 2:> LOGIN AS REST. MANAGER \n";


   y=getche();
   switch(y)
  {
       case '1':
        {
            cout<<" \n        1:> INDIAN STANDARD FOOD \n " << " \n        2:> REQUEST A FOOD \n " << " \n        3:> GIVE A FEEDBACK \n ";
           x=getche();
         switch(x)
       {

      case '1':
     { char a;
        int xy;
           do{
                cout<<"\n\t\t 1:> SEE THE MENU \n\t\t 2:> MAKE ORDER \n\t\t 3:> PRINT BILL \n\t\t 4:> EXIT \n\t\t ";
              a=getche();
           switch(a)
           {
           case '1' :
            {
                j.menu();
                break;
            }
           case '2':
            {
                j.order();
                break;
            }
           case '3':
            {
                j.bill();
               j.show();
               break;
            }
          case '4':
            {

                xy=3;
            break;

            }
           default :
            {
                cout<<"\n OOP'S YOU ENTER WRONG OPTION \n";
                break;
            }
           }



      } while(xy!=3);

        break;

      }
     case '2':
      {
     char x1[50];
     char x2[50];
     char x3[50];
     char x4[20];
     char x5[100];

      fstream file("request.txt", ios::in | ios::out | ios::app );

      cout<<"\n    NOTE: YOU NEED TO PAY Rs. 50 EXTRA FOR REQUESTED FOOD \n";

      cout<<"\n    Origin of FOOD :- ";
      cin.getline(x1,sizeof(x1));

      cout<<"\n    FOOD NAME :- ";
      cin.getline(x2,sizeof(x2));

      cout<<"\n    YOUR NAME :- ";
      cin.getline(x3,sizeof(x3));

      cout<<"\n    MOBILE NO. :- ";
      cin.getline(x4,sizeof(x4));

      cout<<"\n    DELIVERY ADDRESS :- ";
      cin.getline(x5,sizeof(x5));

      cout<<"\n                   \n";
      cout<<"\n BILLING DETAILS : \n";
          cout<<"----------------------------------------------------------------------------------------------------------------\n";

          cout<<"\n   REQUEST RECORDED AS : \n";

          cout<<"\t \t \t"<<"-------------------------\n";
          cout<<"\t \t \t"<<" ORIGIN     :- "<<x1<<"\n";
          cout<<"\t \t \t"<<" FOOD NAME  :- "<<x2<<"\n";
          cout<<"\t \t \t"<<" YOUR NAME  :- "<<x3<<"\n";
          cout<<"\t \t \t"<<" MOBILE NO. :- "<<x4<<"\n";
          cout<<"\t \t \t"<<" YOUR ADDRESS :- "<<x5<<"\n";
          cout<<"\t \t \t"<<"-------------------------\n";
          cout<<"'YOUR REQUESTED FOOD IS DELIVERED TO YOUR ADDRESS WITHIN 30 MIN AFTER CONFIRM'\n";
          cout<<"'YOUR REQUESTED IS RECORDED & UNIQUE TICKET NO.,CONFIRMATION AND FURTHUR DETAILS PROVIDED ON YOUR MOBILE NUMBER' \n ";
          cout<<"-----------------------------------------------------------------------------------------------------------------\n";



          file<<"\n                   \n";
          file<<"----------------------------------------------------------------------------------------------------------------\n";
          file<<"\n BILLING DETAILS : \n";
          file<<"\t \t \t"<<"----------------------------\n";
          file<<"\t \t \t"<<" ORIGIN          :- "<<x1<<"\n";
          file<<"\t \t \t"<<" FOOD NAME       :- "<<x2<<"\n";
          file<<"\t \t \t"<<" CUSTOMER'S NAME :- "<<x3<<"\n";
          file<<"\t \t \t"<<" MOBILE NO.      :- "<<x4<<"\n";
          file<<"\t \t \t"<<" DELIVERY ADDRESS:- "<<x5<<"\n";
          file<<"\t \t \t"<<"----------------------------\n";
          file<<"----------------------------------------------------------------------------------------------------------------\n";
          file.close();




      break;
    }
     case '3':
        {   char f1[20],f2[20],f3[300];
           fstream file("feedback.txt", ios::in | ios::out | ios::app );
            cout<<"\n\t Please Give us a Feedback ";
            cout<<"\n\t\t NAME :- " ;
            cin.getline(f1,sizeof(f1));
            cout<<"\n\t\t MOBILE NO. :- ";
            cin.getline(f2,sizeof(f2));
            cout<<"\n\t\t ENTER YOUR FEEDBACK :-\n";
            cin.getline(f3,sizeof(f3));
            cout<<"\n Thanks for your valuable feedback ";
            file<<"\n                          \n";
            file<<"\n FEEDBACK : ";
            file<<"\n-----------------------------------------------------------\n";
            file<<"\n\t CUSTOMER NAME     :- " <<f1;
            file<<"\n\t CUSTOMER MOBILE   :- " <<f2;
            file<<"\n\t CUSTOMER FEEDBACK :- " <<f3;
            file<<"\n-----------------------------------------------------------\n";
       break;
        }
    default :
    {
  	cout<<"\n OOP'S YOU ENTER WRONG CHOICE";
  	break;
    }
        }

      break;
        }
     case '2':
        {

            cout<<"\n\t\t 1:>  SEE ORDERS \n\t\t 2:>  SEE REQUESTED ORDERS \n\t\t 3:>  SEE FEEDBACK \n";
            z=getche();
            switch(z)
            {
            case '1':
                {          char p[500];
              ifstream file("orders.txt" ,ios::in | ios::out | ios::app);
                cout<<"\n------------------------------------------------------------------------------------------------------------------------\n";
               cout<<"\n-------------------------------------------------ORDERS.TXT--------------------------------------------------------------\n";
               cout<<"\n-------------------------------------------------------------------------------------------------------------------------\n";
               while(file.getline(p,sizeof(p)))
             {
              cout<< p << endl;
             }  file.close();
              cout<<"\n-------------------------------------------------------------------------------------------------------------------------\n";
               break;
                }
            case '2':
            {

                char p[500];
              ifstream file("request.txt" ,ios::in | ios::out | ios::app);
            cout<<"\n-----------------------------------------------------------------------------------------------------------------------\n";
            cout<<"\n-------------------------------------------------REQUEST.TXT-----------------------------------------------------------\n";
            cout<<"\n-----------------------------------------------------------------------------------------------------------------------\n";
            while(file.getline(p,sizeof(p)))
           {
              cout<< p << endl;
           } file.close();
            cout<<"\n-------------------------------------------------------------------------------------------------------------------------\n";
           break;
            }
            case '3' :
                {
                char p[500];
               ifstream file("feedback.txt" ,ios::in | ios::out | ios::app);
              cout<<"\n-----------------------------------------------------------------------------------------------------------------------\n";
              cout<<"\n-------------------------------------------------FEEDBACK.TXT----------------------------------------------------------\n";
              cout<<"\n-----------------------------------------------------------------------------------------------------------------------\n";
              while(file.getline(p,sizeof(p)))
              {
              cout<< p << endl;
              } file.close();
               cout<<"\n-------------------------------------------------------------------------------------------------------------------------\n";
              break;
                }
            default :
                {
                    cout<<"\n OOP'S YOU ENTER WRONG OPTION \n";
                    break;
                }

            }
            break;
       }
     default :
        {
            cout<<"OOP'S YOU CHOOSEN WRONG OPTION ";
        break;
        }

   }



    return 0;
}
