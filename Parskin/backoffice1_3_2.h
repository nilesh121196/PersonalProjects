#ifndef BACKOFFICE1_3_2_H
#define BACKOFFICE1_3_2_H

#include <QDialog>
#include <QtSql>
#include <QtDebug>
#include <QFileInfo>
#include<QSqlQuery>

namespace Ui {
class backoffice1_3_2;
}

class backoffice1_3_2 : public QDialog
{
    Q_OBJECT

public:
    explicit backoffice1_3_2(QWidget *parent = 0);
    ~backoffice1_3_2();

private slots:
    void on_backtoback_clicked();

    void on_hometohome_clicked();

    void on_pushButton_clicked();

private:
    Ui::backoffice1_3_2 *ui;
};

#endif // BACKOFFICE1_3_2_H
