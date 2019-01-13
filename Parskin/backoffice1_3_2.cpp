#include "backoffice1_3_2.h"
#include "ui_backoffice1_3_2.h"
#include "backoffice1_3.h"
#include "loginmain.h"
#include "backoffice1.h"
#include "QMessageBox"

backoffice1_3_2::backoffice1_3_2(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::backoffice1_3_2)
{
    ui->setupUi(this);
    QSqlDatabase mydb3 = QSqlDatabase::addDatabase("QSQLITE");
    mydb3.setDatabaseName("database.db");
    if(!mydb3.open())
    {
        qDebug()<<"Failed to open";
    }
    else
    {
        qDebug()<<"Opened";
    }
}

backoffice1_3_2::~backoffice1_3_2()
{
    delete ui;
}

void backoffice1_3_2::on_backtoback_clicked()
{
    hide();
    backoffice1_3 bo1_3;
    bo1_3.setModal(true);
    bo1_3.exec();
}

void backoffice1_3_2::on_hometohome_clicked()
{
    hide();
    LoginMain lm;
    lm.setModal(true);
    lm.exec();
}

void backoffice1_3_2::on_pushButton_clicked()
{
    QString upid = ui->lineEdit->text();


    QSqlQuery qry;
    if(qry.exec("select * from RegisteredUser where PID='"+upid +"'"))
    {
        int count=0;
        while(qry.next())
        {
            count++;
        }
        if(count==1)
        {

            QSqlQuery query("Select Name from RegisteredUser where PID='"+upid +"'");
            while(query.next()){
            ui->label_2->setText(query.value(0).toString());
            }

            QSqlQuery query1("Select Age from RegisteredUser where PID='"+upid +"'");
            while(query1.next()){
            ui->label_3->setText(query1.value(0).toString());
            }

            QSqlQuery query2("Select vehicleno from RegisteredUser where PID='"+upid +"'");
            while(query2.next()){
            ui->label_4->setText(query2.value(0).toString());
            }

            QSqlQuery query3("Select Address from RegisteredUser where PID='"+upid +"'");
            while(query3.next()){
            ui->label_5->setText(query3.value(0).toString());
            }

            QSqlQuery query4("Select mobileno from RegisteredUser where PID='"+upid +"'");
            while(query4.next()){
            ui->label_6->setText(query4.value(0).toString());
            }

            QSqlQuery query5("Select Plan from RegisteredUser where PID='"+upid +"'");
            while(query5.next()){
            ui->label_13->setText(query5.value(0).toString());
            }

            QSqlQuery query6("Select StartTime from RegisteredUser where PID='"+upid +"'");
            while(query6.next()){
            ui->label_16->setText(query6.value(0).toString());
            }

            QSqlQuery query7("Select EndTime from RegisteredUser where PID='"+upid +"'");
            while(query7.next()){
            ui->label_17->setText(query7.value(0).toString());
            }

            QSqlQuery query8("Select Status from RegisteredUser where PID='"+upid +"'");
            while(query8.next()){
            ui->label_19->setText(query8.value(0).toString());
            }
        }

        if(count<1)
        {
             QMessageBox::warning(this, "PID", "Incorrect PID");
        }
    }
}
