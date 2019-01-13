/********************************************************************************
** Form generated from reading UI file 'backoffice1_3.ui'
**
** Created by: Qt User Interface Compiler version 5.6.0
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_BACKOFFICE1_3_H
#define UI_BACKOFFICE1_3_H

#include <QtCore/QVariant>
#include <QtWidgets/QAction>
#include <QtWidgets/QApplication>
#include <QtWidgets/QButtonGroup>
#include <QtWidgets/QDialog>
#include <QtWidgets/QHeaderView>
#include <QtWidgets/QPushButton>

QT_BEGIN_NAMESPACE

class Ui_backoffice1_3
{
public:
    QPushButton *bo13pstatus;
    QPushButton *bo13userstatus;
    QPushButton *hometohome;
    QPushButton *backtoback;

    void setupUi(QDialog *backoffice1_3)
    {
        if (backoffice1_3->objectName().isEmpty())
            backoffice1_3->setObjectName(QStringLiteral("backoffice1_3"));
        backoffice1_3->resize(654, 462);
        bo13pstatus = new QPushButton(backoffice1_3);
        bo13pstatus->setObjectName(QStringLiteral("bo13pstatus"));
        bo13pstatus->setGeometry(QRect(190, 170, 111, 101));
        QFont font;
        font.setFamily(QStringLiteral("Segoe UI"));
        font.setPointSize(10);
        bo13pstatus->setFont(font);
        bo13pstatus->setAutoFillBackground(false);
        bo13pstatus->setStyleSheet(QLatin1String("background-color: #64e827;\n"
"border: 1px solid black;\n"
"border-radius: 45px;\n"
"border-color: #64e827;"));
        bo13userstatus = new QPushButton(backoffice1_3);
        bo13userstatus->setObjectName(QStringLiteral("bo13userstatus"));
        bo13userstatus->setGeometry(QRect(360, 170, 111, 101));
        bo13userstatus->setFont(font);
        bo13userstatus->setAutoFillBackground(false);
        bo13userstatus->setStyleSheet(QLatin1String("background-color: #64e827;\n"
"border: 1px solid black;\n"
"border-radius: 45px;\n"
"border-color: #64e827;"));
        hometohome = new QPushButton(backoffice1_3);
        hometohome->setObjectName(QStringLiteral("hometohome"));
        hometohome->setGeometry(QRect(600, 0, 61, 51));
        QFont font1;
        font1.setPointSize(14);
        hometohome->setFont(font1);
        hometohome->setAutoFillBackground(false);
        hometohome->setStyleSheet(QStringLiteral("background-color:white;"));
        backtoback = new QPushButton(backoffice1_3);
        backtoback->setObjectName(QStringLiteral("backtoback"));
        backtoback->setGeometry(QRect(540, 0, 60, 51));
        backtoback->setFont(font1);
        backtoback->setAutoFillBackground(false);
        backtoback->setStyleSheet(QStringLiteral("background-color:white;"));

        retranslateUi(backoffice1_3);

        QMetaObject::connectSlotsByName(backoffice1_3);
    } // setupUi

    void retranslateUi(QDialog *backoffice1_3)
    {
        backoffice1_3->setWindowTitle(QApplication::translate("backoffice1_3", "Dialog", 0));
        bo13pstatus->setText(QApplication::translate("backoffice1_3", "Parking Status", 0));
        bo13userstatus->setText(QApplication::translate("backoffice1_3", "Indivisual Detail \n"
"and Status", 0));
        hometohome->setText(QApplication::translate("backoffice1_3", "\356\204\217", 0));
        backtoback->setText(QApplication::translate("backoffice1_3", "\356\204\216", 0));
    } // retranslateUi

};

namespace Ui {
    class backoffice1_3: public Ui_backoffice1_3 {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_BACKOFFICE1_3_H
