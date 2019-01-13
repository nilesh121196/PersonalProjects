#ifndef BACKOFFICE1_1_1_H
#define BACKOFFICE1_1_1_H

#include <QDialog>
#include <QtSql>
#include <QtDebug>
#include <QFileInfo>
#include<QSqlQuery>

namespace Ui {
class backoffice1_1_1;
}

class backoffice1_1_1 : public QDialog
{
    Q_OBJECT

public:
    explicit backoffice1_1_1(QWidget *parent = 0);
    ~backoffice1_1_1();

private:
    Ui::backoffice1_1_1 *ui;
};

#endif // BACKOFFICE1_1_1_H
