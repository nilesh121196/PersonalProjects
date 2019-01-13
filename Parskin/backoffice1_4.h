#ifndef BACKOFFICE1_4_H
#define BACKOFFICE1_4_H

#include <QDialog>
#include <QtSql>
#include <QtDebug>
#include <QFileInfo>
#include<QSqlQuery>

namespace Ui {
class backoffice1_4;
}

class backoffice1_4 : public QDialog
{
    Q_OBJECT

public:
    explicit backoffice1_4(QWidget *parent = 0);
    ~backoffice1_4();

private slots:
    void on_backtoback_clicked();

    void on_hometohome_clicked();

    void on_pushButton_clicked();

    void on_pushButton_3_clicked();

private:
    Ui::backoffice1_4 *ui;
};

#endif // BACKOFFICE1_4_H
