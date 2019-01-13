#ifndef BACKOFFICE1_H
#define BACKOFFICE1_H

#include <QDialog>

namespace Ui {
class backoffice1;
}

class backoffice1 : public QDialog
{
    Q_OBJECT

public:
    explicit backoffice1(QWidget *parent = 0);
    ~backoffice1();

private slots:
    void showTime();
    void on_bo1register_clicked();

    void on_bo1activatedeactivate_clicked();

    void on_bo1checkstatus_clicked();

    void on_bo1deregister_clicked();

    void on_hometohome_clicked();

private:
    Ui::backoffice1 *ui;
};

#endif // BACKOFFICE1_H
