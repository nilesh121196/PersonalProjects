/********************************************************************************
** Form generated from reading UI file 'testdialog.ui'
**
** Created by: Qt User Interface Compiler version 5.6.0
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_TESTDIALOG_H
#define UI_TESTDIALOG_H

#include <QtCore/QVariant>
#include <QtWidgets/QAction>
#include <QtWidgets/QApplication>
#include <QtWidgets/QButtonGroup>
#include <QtWidgets/QComboBox>
#include <QtWidgets/QDialog>
#include <QtWidgets/QHeaderView>
#include <QtWidgets/QLineEdit>
#include <QtWidgets/QPushButton>
#include <QtWidgets/QTextEdit>
#include <QtWidgets/QTimeEdit>

QT_BEGIN_NAMESPACE

class Ui_testdialog
{
public:
    QComboBox *c1;
    QTimeEdit *t1;
    QLineEdit *name1;
    QTextEdit *address1;
    QPushButton *pushButton;

    void setupUi(QDialog *testdialog)
    {
        if (testdialog->objectName().isEmpty())
            testdialog->setObjectName(QStringLiteral("testdialog"));
        testdialog->resize(757, 466);
        c1 = new QComboBox(testdialog);
        c1->setObjectName(QStringLiteral("c1"));
        c1->setGeometry(QRect(350, 210, 69, 22));
        t1 = new QTimeEdit(testdialog);
        t1->setObjectName(QStringLiteral("t1"));
        t1->setGeometry(QRect(300, 250, 118, 22));
        name1 = new QLineEdit(testdialog);
        name1->setObjectName(QStringLiteral("name1"));
        name1->setGeometry(QRect(100, 150, 113, 20));
        address1 = new QTextEdit(testdialog);
        address1->setObjectName(QStringLiteral("address1"));
        address1->setGeometry(QRect(100, 200, 104, 71));
        pushButton = new QPushButton(testdialog);
        pushButton->setObjectName(QStringLiteral("pushButton"));
        pushButton->setGeometry(QRect(120, 320, 75, 23));

        retranslateUi(testdialog);

        QMetaObject::connectSlotsByName(testdialog);
    } // setupUi

    void retranslateUi(QDialog *testdialog)
    {
        testdialog->setWindowTitle(QApplication::translate("testdialog", "Dialog", 0));
        c1->clear();
        c1->insertItems(0, QStringList()
         << QApplication::translate("testdialog", "fwefe", 0)
         << QApplication::translate("testdialog", "vdsvrefev", 0)
        );
        pushButton->setText(QApplication::translate("testdialog", "PushButton", 0));
    } // retranslateUi

};

namespace Ui {
    class testdialog: public Ui_testdialog {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_TESTDIALOG_H
