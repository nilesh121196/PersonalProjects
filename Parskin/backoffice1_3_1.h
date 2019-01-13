#ifndef BACKOFFICE1_3_1_H
#define BACKOFFICE1_3_1_H

#include <QDialog>
#include <QtSql>
#include <QtDebug>
#include <QFileInfo>
#include<QSqlQuery>

namespace Ui {
class backoffice1_3_1;
}

class backoffice1_3_1 : public QDialog
{
    Q_OBJECT

public:
    explicit backoffice1_3_1(QWidget *parent = 0);
    ~backoffice1_3_1();

private slots:
    void on_backtoback_clicked();

    void on_hometohome_clicked();

private:
    Ui::backoffice1_3_1 *ui;
};

#endif // BACKOFFICE1_3_1_H
