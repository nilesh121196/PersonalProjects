#ifndef TESTDIALOG_H
#define TESTDIALOG_H

#include <QDialog>
#include <QtSql>
#include <QtDebug>
#include <QFileInfo>
#include<QSqlQuery>

namespace Ui {
class testdialog;
}

class testdialog : public QDialog
{
    Q_OBJECT

public:
    explicit testdialog(QWidget *parent = 0);
    ~testdialog();

private slots:
    void on_c1_activated(const QString &arg1);

    void on_t1_editingFinished();

    void on_pushButton_clicked();

private:
    Ui::testdialog *ui;
};

#endif // TESTDIALOG_H
