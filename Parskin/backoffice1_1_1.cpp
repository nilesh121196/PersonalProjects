#include "backoffice1_1_1.h"
#include "ui_backoffice1_1_1.h"
#include "loginmain.h"

backoffice1_1_1::backoffice1_1_1(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::backoffice1_1_1)
{
    ui->setupUi(this);
}

backoffice1_1_1::~backoffice1_1_1()
{
    delete ui;
}
