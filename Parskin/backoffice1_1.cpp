#include "backoffice1_1.h"
#include "ui_backoffice1_1.h"
#include<QMessageBox>
#include "backoffice1.h"
#include "loginmain.h"
#include "parkingslot.h"

backoffice1_1::backoffice1_1(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::backoffice1_1)
{
    ui->setupUi(this);
    QSqlDatabase mydb1 = QSqlDatabase::addDatabase("QSQLITE");
    mydb1.setDatabaseName("database.db");
    if(!mydb1.open())
    {
        qDebug()<<"Failed to open";
    }
    else
    {
        qDebug()<<"Opened";
    }

}

void backoffice1_1::on_uregister_clicked()
{
      QString un = ui->uname->text();
      QString ua = ui->uaddress->toPlainText();
      QString uage = ui->uage->text();
      QString um = ui->umobileno->text();
      QString uvehicle = ui->uvehicleno->text();
      QString uplan = ui->uplan->currentText();
      QTime tm1 = ui->ustime->time();
      QTime tm2 = ui->uetime->time();
      QString ust = tm1.toString("hh : mm");
      QString uet = tm2.toString("hh : mm");
      QString uplocation = ui->ulocation->currentText();

      QTime time=QTime::currentTime();
      QString rt = time.toString("hhmmss");

      QDate date = QDate::currentDate();
      QString rd = date.toString("ddMMyy");

      QString pid = rt+rd;
      //qlonglong pid = ((rt+rd).toLongLong());


      qDebug()<<un <<ua <<uage <<um <<uvehicle <<uplan <<ust<<uet<<uplocation<<pid;

    QSqlQuery qry;
    if(qry.exec("INSERT INTO RegisteredUser(Name, Age, Address, mobileno, vehicleno, StartTime, EndTime, Plan, ParkingLocation, PID, Status) VALUES ('"+un+"','"+uage+"','"+ua+"','"+um+"','"+uvehicle+"','"+ust+"','"+uet+"','"+uplan+"','"+uplocation+"',"+pid+",'Activate')"))
    {
        QMessageBox::information(this, "Registration", "Registered Successfully");
    }
    else
    {
        QMessageBox::warning(this, "Registration", "Detail already exist or Missing Detail");
    }
    //mydb1.close();

}

backoffice1_1::~backoffice1_1()
{

    delete ui;
}



void backoffice1_1::on_ucancel_clicked()
{
    hide();
    backoffice1_1 bo1_1;
    bo1_1.setModal(true);
    bo1_1.exec();
}

void backoffice1_1::on_hometohome_clicked()
{
    hide();
    LoginMain lm;
    lm.setModal(true);
    lm.exec();
}

void backoffice1_1::on_backtoback_clicked()
{
    hide();
    backoffice1 bo1;
    bo1.setModal(true);
    bo1.exec();
}

void backoffice1_1::on_ulocation_activated(const QString &arg1)
{
    if(ui->ulocation->currentIndex()==1)
    {
        ui->uparklocation->setEnabled(true);
    }
    else
    {
        ui->uparklocation->setEnabled(false);
    }
}

void backoffice1_1::on_uparklocation_clicked()
{
    ParkingSlot bo1_1;
    bo1_1.setModal(true);
    bo1_1.exec();
}
