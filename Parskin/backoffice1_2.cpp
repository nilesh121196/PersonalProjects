#include "backoffice1_2.h"
#include "ui_backoffice1_2.h"
#include "loginmain.h"
#include "backoffice1.h"
#include<QMessageBox>

backoffice1_2::backoffice1_2(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::backoffice1_2)
{
    ui->setupUi(this);
    QSqlDatabase mydb4 = QSqlDatabase::addDatabase("QSQLITE");
    mydb4.setDatabaseName("database.db");
    if(!mydb4.open())
    {
        qDebug()<<"Failed to open";
    }
    else
    {
        qDebug()<<"Opened";
    }
}

backoffice1_2::~backoffice1_2()
{
    delete ui;
}

void backoffice1_2::on_backtoback_clicked()
{
    hide();
    backoffice1 bo1;
    bo1.setModal(true);
    bo1.exec();
}

void backoffice1_2::on_hometohome_clicked()
{
    hide();
    LoginMain lm;
    lm.setModal(true);
    lm.exec();
}

void backoffice1_2::on_pushButton_clicked()
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
            ui->un->setText(query.value(0).toString());
            }

            QSqlQuery query1("Select Age from RegisteredUser where PID='"+upid +"'");
            while(query1.next()){
            ui->uage->setText(query1.value(0).toString());
            }

            QSqlQuery query2("Select vehicleno from RegisteredUser where PID='"+upid +"'");
            while(query2.next()){
            ui->uv->setText(query2.value(0).toString());
            }

            QSqlQuery query3("Select Address from RegisteredUser where PID='"+upid +"'");
            while(query3.next()){
            ui->uaddress->setText(query3.value(0).toString());
            }

            QSqlQuery query4("Select mobileno from RegisteredUser where PID='"+upid +"'");
            while(query4.next()){
            ui->umobile->setText(query4.value(0).toString());
            }

            QSqlQuery query5("Select Plan from RegisteredUser where PID='"+upid +"'");
            while(query5.next()){
            ui->uplan->setText(query5.value(0).toString());
            }

            QSqlQuery query6("Select StartTime from RegisteredUser where PID='"+upid +"'");
            while(query6.next()){
            ui->ust->setText(query6.value(0).toString());
            }

            QSqlQuery query7("Select EndTime from RegisteredUser where PID='"+upid +"'");
            while(query7.next()){
            ui->uet->setText(query7.value(0).toString());
            }

            QSqlQuery query8("Select Status from RegisteredUser where PID='"+upid +"'");
            while(query8.next()){
            ui->us->setText(query8.value(0).toString());
            }
        }

        if(count<1)
        {
             QMessageBox::warning(this, "PID", "Incorrect PID");
        }
    }


    if(ui->us->text()=="Deactivate")
    {
        ui->deactbtn->setEnabled(false);
        ui->actbtn->setEnabled(true);
    }
    else
    {
        ui->deactbtn->setEnabled(true);
        ui->actbtn->setEnabled(false);
    }
}

void backoffice1_2::on_deactbtn_clicked()
{
    QString upid = ui->lineEdit->text();

    QSqlQuery qry;
    if(qry.exec("UPDATE RegisteredUser SET Status='Deactivate' where PID='"+upid +"'"))
    {

        QMessageBox::information(this, "Status", "User Deactivated Successfully!");
        //ui->us->text()="Deactivate";

        //-----------------------------
        QSqlQuery query8("Select Status from RegisteredUser where PID='"+upid +"'");
        while(query8.next()){
        ui->us->setText(query8.value(0).toString());
        }
        //------------------------------


        if(ui->us->text()=="Deactivate")
        {
            ui->deactbtn->setEnabled(false);
            ui->actbtn->setEnabled(true);
        }
        else
        {
            ui->deactbtn->setEnabled(true);
            ui->actbtn->setEnabled(false);
        }

    }
    else
    {
        QMessageBox::information(this, "Status", "User already Deactivated!");
    }
}

void backoffice1_2::on_actbtn_clicked()
{
    QString upid = ui->lineEdit->text();

    QSqlQuery qry;
    if(qry.exec("UPDATE RegisteredUser SET Status='Activate' where PID='"+upid +"'"))
    {
        QMessageBox::information(this, "Status", "User Activate Successfully!");

        //-----------------------------
        QSqlQuery query8("Select Status from RegisteredUser where PID='"+upid +"'");
        while(query8.next()){
        ui->us->setText(query8.value(0).toString());
        }
        //------------------------------


        if(ui->us->text()=="Deactivate")
        {
            ui->deactbtn->setEnabled(false);
            ui->actbtn->setEnabled(true);
        }
        else
        {
            ui->deactbtn->setEnabled(true);
            ui->actbtn->setEnabled(false);
        }

    }
    else
    {
        QMessageBox::information(this, "Status", "User already Activated!");
    }
}
