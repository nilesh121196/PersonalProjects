#include "loginmain.h"
#include "ui_loginmain.h"
#include "backoffice1.h"
#include <QTimer>
#include <QDateTime>

LoginMain::LoginMain(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::LoginMain)
{
    ui->setupUi(this);


    QTimer *timer = new QTimer(this);
    connect(timer,SIGNAL(timeout()),this,SLOT(showTime()));
    timer->start();
}

LoginMain::~LoginMain()
{
    delete ui;
}


void LoginMain::showTime()
{
    QTime time=QTime::currentTime();
    QString time_text = time.toString("hh : mm : ss");
    ui->clocklab->setText(time_text);

    QDate date = QDate::currentDate();
    QString date_text = date.toString("dd MMMM yyyy");
    ui->datelab->setText(date_text);
}


void LoginMain::on_backoffice_btn_clicked()
{

    hide();
    backoffice1 bo1;
    bo1.setModal(true);
    bo1.exec();
}

void LoginMain::on_book_btn_clicked()
{

}
