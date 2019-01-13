#include "mainwindow.h"
#include <QApplication>
#include "testdialog.h"
int main(int argc, char *argv[])
{
    QApplication a(argc, argv);
    MainWindow w;
  //testdialog w;
    w.show();
    return a.exec();
}
