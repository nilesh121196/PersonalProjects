#include "mainwindow.h"
#include "ui_mainwindow.h"
#include "loginmain.h"
#include<QMessageBox>

MainWindow::MainWindow(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindow)
{
    ui->setupUi(this);

    QSqlDatabase mydb = QSqlDatabase::addDatabase("QSQLITE");
    mydb.setDatabaseName("database.db");
    if(!mydb.open())
    {
        qDebug()<<"Failed to open";
    }
    else
    {
        qDebug()<<"Opened";
    }

}



void MainWindow::on_loginbutton_clicked()
{
    QString username = ui->loginusername->text();
    QString password = ui->loginpassword->text();


    QSqlQuery qry;
    if(qry.exec("select * from AdminCredential where Username='"+username +"'and Password='"+password+"'"))
    {
        int count=0;
        while(qry.next())
        {
            count++;
        }
        if(count==1)
        {
            hide();
            LoginMain lm;
            lm.setModal(true);
            lm.exec();
        }
        if(count<1)
        {
             QMessageBox::warning(this, "Login", "Incorrect username or Password");
        }

    }
    mydb.close();

}


MainWindow::~MainWindow()
{
    delete ui;

}
