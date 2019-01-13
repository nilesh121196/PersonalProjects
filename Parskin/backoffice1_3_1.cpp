#include "backoffice1_3_1.h"
#include "ui_backoffice1_3_1.h"
#include "backoffice1_3.h"
#include "loginmain.h"
#include "backoffice1.h"

backoffice1_3_1::backoffice1_3_1(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::backoffice1_3_1)
{
    ui->setupUi(this);
}

backoffice1_3_1::~backoffice1_3_1()
{
    delete ui;
}

void backoffice1_3_1::on_backtoback_clicked()
{
    hide();
    backoffice1_3 bo1_3;
    bo1_3.setModal(true);
    bo1_3.exec();
}

void backoffice1_3_1::on_hometohome_clicked()
{
    hide();
    LoginMain lm;
    lm.setModal(true);
    lm.exec();
}
