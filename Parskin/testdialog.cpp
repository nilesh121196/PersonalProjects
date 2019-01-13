#include "testdialog.h"
#include "ui_testdialog.h"
#include <qdebug.h>
testdialog::testdialog(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::testdialog)
{
    ui->setupUi(this);
    QSqlDatabase mydb2 = QSqlDatabase::addDatabase("QSQLITE");
    mydb2.setDatabaseName("E:/STUDY CENTRE/Study material/Sem 6/CSE308/Project/Parskin/database.db");
    if(!mydb2.open())
    {
        qDebug()<<"Failed to open";
    }
    else
    {
        qDebug()<<"Opened";
    }
}


void testdialog::on_c1_activated(const QString &arg1)
{

}

testdialog::~testdialog()
{
    delete ui;
}


void testdialog::on_t1_editingFinished()
{

}

void testdialog::on_pushButton_clicked()
{
    QString n = ui->name1->text();
    QString m = ui->address1->toPlainText();
    QTime time=QTime::currentTime();
    QString rt = time.toString("hhmmss");

    QDate date = QDate::currentDate();
    QString rd = date.toString("ddMMyy");


    //qlonglong pid = ((rt+rd).toLongLong());
    QString pid = rt+rd;
    QSqlQuery qry;
       if(qry.exec("INSERT INTO TestTable(PID) VALUES ("+pid+")"))
       {
            qDebug()<<"data Entered Successfully";
       }
       else
       {
           qDebug()<<"Already Present or Data Incomplete";
       }

       qDebug()<<ui->c1->currentText();
       QTime tm = ui->t1->time();
       QString s = tm.toString("hh : mm");
               //+ " "  + tm.minute();
       qDebug()<<s;





}
