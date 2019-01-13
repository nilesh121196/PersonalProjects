#ifndef BACKOFFICE1_2_H
#define BACKOFFICE1_2_H

#include <QDialog>
#include <QtSql>
#include <QtDebug>
#include <QFileInfo>
#include<QSqlQuery>

namespace Ui {
class backoffice1_2;
}

class backoffice1_2 : public QDialog
{
    Q_OBJECT

public:
    explicit backoffice1_2(QWidget *parent = 0);
    ~backoffice1_2();

private slots:
    void on_backtoback_clicked();

    void on_hometohome_clicked();

    void on_pushButton_clicked();

    void on_deactbtn_clicked();

    void on_actbtn_clicked();

private:
    Ui::backoffice1_2 *ui;
};

#endif // BACKOFFICE1_2_H
