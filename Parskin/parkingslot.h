#ifndef PARKINGSLOT_H
#define PARKINGSLOT_H

#include <QDialog>

namespace Ui {
class ParkingSlot;
}

class ParkingSlot : public QDialog
{
    Q_OBJECT

public:
    explicit ParkingSlot(QWidget *parent = 0);
    ~ParkingSlot();

private:
    Ui::ParkingSlot *ui;
};

#endif // PARKINGSLOT_H
