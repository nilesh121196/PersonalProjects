#ifndef BACKOFFICE1_1_H
#define BACKOFFICE1_1_H

#include <QDialog>
#include <QtSql>
#include <QtDebug>
#include <QFileInfo>
#include<QSqlQuery>

namespace Ui {
class backoffice1_1;
}

class backoffice1_1 : public QDialog
{
    Q_OBJECT

public:
    explicit backoffice1_1(QWidget *parent = 0);
    ~backoffice1_1();

private slots:
    void on_uregister_clicked();

    void on_ucancel_clicked();

    void on_hometohome_clicked();

    void on_backtoback_clicked();

    void on_ulocation_activated(const QString &arg1);

    void on_uparklocation_clicked();

private:
    Ui::backoffice1_1 *ui;
};

#endif // BACKOFFICE1_1_H
