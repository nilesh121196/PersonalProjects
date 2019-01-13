#ifndef BACKOFFICE1_3_H
#define BACKOFFICE1_3_H

#include <QDialog>
#include <QtSql>
#include <QtDebug>
#include <QFileInfo>
#include<QSqlQuery>

namespace Ui {
class backoffice1_3;
}

class backoffice1_3 : public QDialog
{
    Q_OBJECT

public:
    explicit backoffice1_3(QWidget *parent = 0);
    ~backoffice1_3();

private slots:
    void on_bo13pstatus_clicked();

    void on_bo13userstatus_clicked();

    void on_backtoback_clicked();

    void on_hometohome_clicked();

private:
    Ui::backoffice1_3 *ui;
};

#endif // BACKOFFICE1_3_H
