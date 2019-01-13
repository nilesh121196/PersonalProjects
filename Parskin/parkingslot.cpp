#include "parkingslot.h"
#include "ui_parkingslot.h"

ParkingSlot::ParkingSlot(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::ParkingSlot)
{
    ui->setupUi(this);
}

ParkingSlot::~ParkingSlot()
{
    delete ui;
}
