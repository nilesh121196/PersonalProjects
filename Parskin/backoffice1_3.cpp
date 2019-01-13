#include "backoffice1_3.h"
#include "ui_backoffice1_3.h"
#include "backoffice1_3_1.h"
#include "backoffice1_3_2.h"
#include "backoffice1.h"
#include "loginmain.h"

backoffice1_3::backoffice1_3(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::backoffice1_3)
{
    ui->setupUi(this);
}

backoffice1_3::~backoffice1_3()
{
    delete ui;
}

void backoffice1_3::on_bo13pstatus_clicked()
{
    hide();
    backoffice1_3_1 bo131;
    bo131.setModal(true);
    bo131.exec();
}

void backoffice1_3::on_bo13userstatus_clicked()
{
    hide();
    backoffice1_3_2 bo132;
    bo132.setModal(true);
    bo132.exec();
}

void backoffice1_3::on_backtoback_clicked()
{
    hide();
    backoffice1 bo1;
    bo1.setModal(true);
    bo1.exec();
}

void backoffice1_3::on_hometohome_clicked()
{
    hide();
    LoginMain lm;
    lm.setModal(true);
    lm.exec();
}
