/********************************************************************************
** Form generated from reading UI file 'backoffice1_1.ui'
**
** Created by: Qt User Interface Compiler version 5.6.0
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_BACKOFFICE1_1_H
#define UI_BACKOFFICE1_1_H

#include <QtCore/QVariant>
#include <QtWidgets/QAction>
#include <QtWidgets/QApplication>
#include <QtWidgets/QButtonGroup>
#include <QtWidgets/QComboBox>
#include <QtWidgets/QDialog>
#include <QtWidgets/QFrame>
#include <QtWidgets/QHeaderView>
#include <QtWidgets/QLabel>
#include <QtWidgets/QLineEdit>
#include <QtWidgets/QPushButton>
#include <QtWidgets/QTextEdit>
#include <QtWidgets/QTimeEdit>

QT_BEGIN_NAMESPACE

class Ui_backoffice1_1
{
public:
    QLabel *label;
    QLabel *label_2;
    QLabel *label_3;
    QLabel *label_4;
    QFrame *line;
    QLineEdit *uname;
    QLineEdit *uage;
    QLineEdit *uvehicleno;
    QLabel *label_5;
    QComboBox *uplan;
    QLabel *label_6;
    QTextEdit *uaddress;
    QLabel *label_7;
    QLabel *label_8;
    QTimeEdit *ustime;
    QLabel *label_9;
    QTimeEdit *uetime;
    QLabel *label_10;
    QLabel *label_11;
    QLabel *label_12;
    QLabel *label_13;
    QLabel *label_14;
    QLabel *label_15;
    QLabel *label_19;
    QLabel *label_20;
    QLabel *label_21;
    QComboBox *ulocation;
    QPushButton *uparklocation;
    QLabel *label_23;
    QLineEdit *umobileno;
    QLabel *label_22;
    QFrame *line_2;
    QPushButton *uregister;
    QPushButton *ucancel;
    QPushButton *backtoback;
    QPushButton *hometohome;

    void setupUi(QDialog *backoffice1_1)
    {
        if (backoffice1_1->objectName().isEmpty())
            backoffice1_1->setObjectName(QStringLiteral("backoffice1_1"));
        backoffice1_1->setWindowModality(Qt::NonModal);
        backoffice1_1->resize(756, 477);
        label = new QLabel(backoffice1_1);
        label->setObjectName(QStringLiteral("label"));
        label->setGeometry(QRect(30, 70, 51, 16));
        QFont font;
        font.setPointSize(11);
        label->setFont(font);
        label_2 = new QLabel(backoffice1_1);
        label_2->setObjectName(QStringLiteral("label_2"));
        label_2->setGeometry(QRect(30, 100, 51, 20));
        label_2->setFont(font);
        label_3 = new QLabel(backoffice1_1);
        label_3->setObjectName(QStringLiteral("label_3"));
        label_3->setGeometry(QRect(30, 270, 81, 16));
        label_3->setFont(font);
        label_4 = new QLabel(backoffice1_1);
        label_4->setObjectName(QStringLiteral("label_4"));
        label_4->setGeometry(QRect(290, 10, 141, 31));
        QFont font1;
        font1.setFamily(QStringLiteral("Microsoft YaHei Light"));
        font1.setPointSize(16);
        font1.setBold(false);
        font1.setItalic(true);
        font1.setWeight(50);
        label_4->setFont(font1);
        line = new QFrame(backoffice1_1);
        line->setObjectName(QStringLiteral("line"));
        line->setGeometry(QRect(0, 40, 791, 20));
        line->setFrameShape(QFrame::HLine);
        line->setFrameShadow(QFrame::Sunken);
        uname = new QLineEdit(backoffice1_1);
        uname->setObjectName(QStringLiteral("uname"));
        uname->setGeometry(QRect(130, 70, 141, 20));
        uage = new QLineEdit(backoffice1_1);
        uage->setObjectName(QStringLiteral("uage"));
        uage->setGeometry(QRect(130, 100, 141, 20));
        uvehicleno = new QLineEdit(backoffice1_1);
        uvehicleno->setObjectName(QStringLiteral("uvehicleno"));
        uvehicleno->setGeometry(QRect(130, 270, 141, 20));
        label_5 = new QLabel(backoffice1_1);
        label_5->setObjectName(QStringLiteral("label_5"));
        label_5->setGeometry(QRect(30, 300, 81, 16));
        label_5->setFont(font);
        uplan = new QComboBox(backoffice1_1);
        uplan->setObjectName(QStringLiteral("uplan"));
        uplan->setGeometry(QRect(130, 300, 69, 22));
        label_6 = new QLabel(backoffice1_1);
        label_6->setObjectName(QStringLiteral("label_6"));
        label_6->setGeometry(QRect(30, 150, 51, 21));
        label_6->setFont(font);
        uaddress = new QTextEdit(backoffice1_1);
        uaddress->setObjectName(QStringLiteral("uaddress"));
        uaddress->setGeometry(QRect(130, 130, 181, 101));
        label_7 = new QLabel(backoffice1_1);
        label_7->setObjectName(QStringLiteral("label_7"));
        label_7->setGeometry(QRect(30, 170, 61, 21));
        label_7->setFont(font);
        label_8 = new QLabel(backoffice1_1);
        label_8->setObjectName(QStringLiteral("label_8"));
        label_8->setGeometry(QRect(30, 330, 81, 16));
        label_8->setFont(font);
        ustime = new QTimeEdit(backoffice1_1);
        ustime->setObjectName(QStringLiteral("ustime"));
        ustime->setGeometry(QRect(130, 330, 61, 22));
        label_9 = new QLabel(backoffice1_1);
        label_9->setObjectName(QStringLiteral("label_9"));
        label_9->setGeometry(QRect(200, 330, 16, 16));
        label_9->setFont(font);
        uetime = new QTimeEdit(backoffice1_1);
        uetime->setObjectName(QStringLiteral("uetime"));
        uetime->setGeometry(QRect(220, 330, 61, 22));
        label_10 = new QLabel(backoffice1_1);
        label_10->setObjectName(QStringLiteral("label_10"));
        label_10->setGeometry(QRect(20, 70, 16, 16));
        label_10->setFont(font);
        label_10->setStyleSheet(QLatin1String("color:red;\n"
""));
        label_11 = new QLabel(backoffice1_1);
        label_11->setObjectName(QStringLiteral("label_11"));
        label_11->setGeometry(QRect(20, 100, 16, 16));
        label_11->setFont(font);
        label_11->setStyleSheet(QLatin1String("color:red;\n"
""));
        label_12 = new QLabel(backoffice1_1);
        label_12->setObjectName(QStringLiteral("label_12"));
        label_12->setGeometry(QRect(20, 150, 16, 16));
        label_12->setFont(font);
        label_12->setStyleSheet(QLatin1String("color:red;\n"
""));
        label_13 = new QLabel(backoffice1_1);
        label_13->setObjectName(QStringLiteral("label_13"));
        label_13->setGeometry(QRect(20, 270, 16, 16));
        label_13->setFont(font);
        label_13->setStyleSheet(QLatin1String("color:red;\n"
""));
        label_14 = new QLabel(backoffice1_1);
        label_14->setObjectName(QStringLiteral("label_14"));
        label_14->setGeometry(QRect(20, 300, 16, 16));
        label_14->setFont(font);
        label_14->setStyleSheet(QLatin1String("color:red;\n"
""));
        label_15 = new QLabel(backoffice1_1);
        label_15->setObjectName(QStringLiteral("label_15"));
        label_15->setGeometry(QRect(50, 360, 201, 21));
        QFont font2;
        font2.setPointSize(9);
        font2.setItalic(true);
        label_15->setFont(font2);
        label_15->setStyleSheet(QStringLiteral("background-color:#f4b642;"));
        label_19 = new QLabel(backoffice1_1);
        label_19->setObjectName(QStringLiteral("label_19"));
        label_19->setGeometry(QRect(50, 380, 201, 20));
        label_19->setFont(font2);
        label_19->setStyleSheet(QStringLiteral("background-color:#f4b642;"));
        label_20 = new QLabel(backoffice1_1);
        label_20->setObjectName(QStringLiteral("label_20"));
        label_20->setGeometry(QRect(390, 80, 16, 16));
        label_20->setFont(font);
        label_20->setStyleSheet(QLatin1String("color:red;\n"
""));
        label_21 = new QLabel(backoffice1_1);
        label_21->setObjectName(QStringLiteral("label_21"));
        label_21->setGeometry(QRect(400, 80, 111, 21));
        label_21->setFont(font);
        ulocation = new QComboBox(backoffice1_1);
        ulocation->setObjectName(QStringLiteral("ulocation"));
        ulocation->setGeometry(QRect(520, 80, 71, 21));
        ulocation->setAutoFillBackground(false);
        uparklocation = new QPushButton(backoffice1_1);
        uparklocation->setObjectName(QStringLiteral("uparklocation"));
        uparklocation->setEnabled(true);
        uparklocation->setGeometry(QRect(410, 120, 181, 23));
        label_23 = new QLabel(backoffice1_1);
        label_23->setObjectName(QStringLiteral("label_23"));
        label_23->setGeometry(QRect(30, 240, 81, 16));
        label_23->setFont(font);
        umobileno = new QLineEdit(backoffice1_1);
        umobileno->setObjectName(QStringLiteral("umobileno"));
        umobileno->setGeometry(QRect(130, 240, 141, 20));
        label_22 = new QLabel(backoffice1_1);
        label_22->setObjectName(QStringLiteral("label_22"));
        label_22->setGeometry(QRect(20, 240, 16, 16));
        label_22->setFont(font);
        label_22->setStyleSheet(QLatin1String("color:red;\n"
""));
        line_2 = new QFrame(backoffice1_1);
        line_2->setObjectName(QStringLiteral("line_2"));
        line_2->setGeometry(QRect(-60, 440, 851, 20));
        line_2->setFrameShape(QFrame::HLine);
        line_2->setFrameShadow(QFrame::Sunken);
        uregister = new QPushButton(backoffice1_1);
        uregister->setObjectName(QStringLiteral("uregister"));
        uregister->setGeometry(QRect(420, 240, 221, 61));
        QFont font3;
        font3.setPointSize(12);
        uregister->setFont(font3);
        uregister->setAutoFillBackground(false);
        uregister->setStyleSheet(QLatin1String("background-color:#64e827;\n"
"border-radius: 10px;\n"
"border-color:#64e827;"));
        ucancel = new QPushButton(backoffice1_1);
        ucancel->setObjectName(QStringLiteral("ucancel"));
        ucancel->setGeometry(QRect(420, 320, 221, 61));
        ucancel->setFont(font3);
        ucancel->setAutoFillBackground(false);
        ucancel->setStyleSheet(QLatin1String("background-color:#f4b642;\n"
"border-radius: 10px;\n"
"border-color:#f4b642;"));
        backtoback = new QPushButton(backoffice1_1);
        backtoback->setObjectName(QStringLiteral("backtoback"));
        backtoback->setGeometry(QRect(-10, 0, 60, 51));
        QFont font4;
        font4.setPointSize(14);
        backtoback->setFont(font4);
        backtoback->setAutoFillBackground(true);
        backtoback->setStyleSheet(QStringLiteral("background-color:white;"));
        hometohome = new QPushButton(backoffice1_1);
        hometohome->setObjectName(QStringLiteral("hometohome"));
        hometohome->setGeometry(QRect(700, 0, 61, 51));
        hometohome->setFont(font4);
        hometohome->setAutoFillBackground(true);
        hometohome->setStyleSheet(QStringLiteral("background-color:white;"));

        retranslateUi(backoffice1_1);

        QMetaObject::connectSlotsByName(backoffice1_1);
    } // setupUi

    void retranslateUi(QDialog *backoffice1_1)
    {
        backoffice1_1->setWindowTitle(QApplication::translate("backoffice1_1", "Registration", 0));
        label->setText(QApplication::translate("backoffice1_1", "Name :", 0));
        label_2->setText(QApplication::translate("backoffice1_1", "Age :", 0));
        label_3->setText(QApplication::translate("backoffice1_1", "Vehicle No. :", 0));
        label_4->setText(QApplication::translate("backoffice1_1", "Registeration", 0));
        label_5->setText(QApplication::translate("backoffice1_1", "Plan :", 0));
        uplan->clear();
        uplan->insertItems(0, QStringList()
         << QApplication::translate("backoffice1_1", "1 Month", 0)
         << QApplication::translate("backoffice1_1", "6 Month", 0)
         << QApplication::translate("backoffice1_1", "12 Month", 0)
        );
        label_6->setText(QApplication::translate("backoffice1_1", "Current", 0));
        label_7->setText(QApplication::translate("backoffice1_1", "Addess:", 0));
        label_8->setText(QApplication::translate("backoffice1_1", "Time Slot:", 0));
        label_9->setText(QApplication::translate("backoffice1_1", "to", 0));
        label_10->setText(QApplication::translate("backoffice1_1", "*", 0));
        label_11->setText(QApplication::translate("backoffice1_1", "*", 0));
        label_12->setText(QApplication::translate("backoffice1_1", "*", 0));
        label_13->setText(QApplication::translate("backoffice1_1", "*", 0));
        label_14->setText(QApplication::translate("backoffice1_1", "*", 0));
        label_15->setText(QApplication::translate("backoffice1_1", "* Note: Leave time 00:00 in both,", 0));
        label_19->setText(QApplication::translate("backoffice1_1", " if you want time slot as whole day.", 0));
        label_20->setText(QApplication::translate("backoffice1_1", "*", 0));
        label_21->setText(QApplication::translate("backoffice1_1", "Parking Location:", 0));
        ulocation->clear();
        ulocation->insertItems(0, QStringList()
         << QApplication::translate("backoffice1_1", "Random", 0)
         << QApplication::translate("backoffice1_1", "Custom", 0)
        );
        uparklocation->setText(QApplication::translate("backoffice1_1", "Choose Parking Location", 0));
        label_23->setText(QApplication::translate("backoffice1_1", "Mobile No.", 0));
        label_22->setText(QApplication::translate("backoffice1_1", "*", 0));
        uregister->setText(QApplication::translate("backoffice1_1", "\356\204\205 Register", 0));
        ucancel->setText(QApplication::translate("backoffice1_1", "\356\204\227 Reset", 0));
        backtoback->setText(QApplication::translate("backoffice1_1", "\356\204\216", 0));
        hometohome->setText(QApplication::translate("backoffice1_1", "\356\204\217", 0));
    } // retranslateUi

};

namespace Ui {
    class backoffice1_1: public Ui_backoffice1_1 {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_BACKOFFICE1_1_H
