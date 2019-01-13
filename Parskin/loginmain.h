#ifndef LOGINMAIN_H
#define LOGINMAIN_H

#include<QDialog>
#include <QtSql>
#include <QtDebug>
#include <QFileInfo>
#include<QSqlQuery>

namespace Ui {
class LoginMain;
}

class LoginMain : public QDialog
{
    Q_OBJECT

public:
    explicit LoginMain(QWidget *parent = 0);
    ~LoginMain();

private slots:

    void showTime();

    void on_backoffice_btn_clicked();

    void on_book_btn_clicked();

private:
    Ui::LoginMain *ui;
};

#endif // LOGINMAIN_H
