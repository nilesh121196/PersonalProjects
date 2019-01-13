#include "backoffice1.h"
#include "loginmain.h"
#include "ui_backoffice1.h"
#include "backoffice1_1.h"
#include "backoffice1_2.h"
#include "backoffice1_3.h"
#include "backoffice1_4.h"
#include <QTimer>
#include <QDateTime>

backoffice1::backoffice1(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::backoffice1)
{
    ui->setupUi(this);


    QTimer *timer = new QTimer(this);
    connect(timer,SIGNAL(timeout()),this,SLOT(showTime()));
    timer->start();
}


backoffice1::~backoffice1()
{
    delete ui;
}


void backoffice1::showTime()
{
    QTime time=QTime::currentTime();
    QString time_text = time.toString("hh : mm : ss");
    ui->clocklab->setText(time_text);

    QDate date = QDate::currentDate();
    QString date_text = date.toString("dd MMMM yyyy");
    ui->datelab->setText(date_text);
}


void backoffice1::on_bo1register_clicked()
{
    hide();
    backoffice1_1 bo1_1;
    bo1_1.setModal(true);
    bo1_1.exec();
}

void backoffice1::on_bo1activatedeactivate_clicked()
{
    hide();
    backoffice1_2 bo1_2;
    bo1_2.setModal(true);
    bo1_2.exec();
}

void backoffice1::on_bo1checkstatus_clicked()
{
    hide();
    backoffice1_3 bo1_3;
    bo1_3.setModal(true);
    bo1_3.exec();
}

void backoffice1::on_bo1deregister_clicked()
{
    hide();
    backoffice1_4 bo1_4;
    bo1_4.setModal(true);
    bo1_4.exec();
}

void backoffice1::on_hometohome_clicked()
{
    hide();
    LoginMain lm;
    lm.setModal(true);
    lm.exec();
}
