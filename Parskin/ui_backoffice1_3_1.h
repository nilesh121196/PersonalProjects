/********************************************************************************
** Form generated from reading UI file 'backoffice1_3_1.ui'
**
** Created by: Qt User Interface Compiler version 5.6.0
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_BACKOFFICE1_3_1_H
#define UI_BACKOFFICE1_3_1_H

#include <QtCore/QVariant>
#include <QtWidgets/QAction>
#include <QtWidgets/QApplication>
#include <QtWidgets/QButtonGroup>
#include <QtWidgets/QComboBox>
#include <QtWidgets/QDialog>
#include <QtWidgets/QFrame>
#include <QtWidgets/QHeaderView>
#include <QtWidgets/QLabel>
#include <QtWidgets/QPushButton>

QT_BEGIN_NAMESPACE

class Ui_backoffice1_3_1
{
public:
    QFrame *frame;
    QFrame *line;
    QLabel *label;
    QComboBox *comboBox;
    QPushButton *pushButton;
    QPushButton *hometohome;
    QPushButton *backtoback;

    void setupUi(QDialog *backoffice1_3_1)
    {
        if (backoffice1_3_1->objectName().isEmpty())
            backoffice1_3_1->setObjectName(QStringLiteral("backoffice1_3_1"));
        backoffice1_3_1->resize(706, 476);
        frame = new QFrame(backoffice1_3_1);
        frame->setObjectName(QStringLiteral("frame"));
        frame->setGeometry(QRect(110, 200, 120, 80));
        frame->setFrameShape(QFrame::StyledPanel);
        frame->setFrameShadow(QFrame::Raised);
        line = new QFrame(backoffice1_3_1);
        line->setObjectName(QStringLiteral("line"));
        line->setGeometry(QRect(0, 60, 731, 16));
        line->setFrameShape(QFrame::HLine);
        line->setFrameShadow(QFrame::Sunken);
        label = new QLabel(backoffice1_3_1);
        label->setObjectName(QStringLiteral("label"));
        label->setGeometry(QRect(10, 42, 101, 21));
        QFont font;
        font.setFamily(QStringLiteral("Segoe UI"));
        font.setPointSize(10);
        label->setFont(font);
        comboBox = new QComboBox(backoffice1_3_1);
        comboBox->setObjectName(QStringLiteral("comboBox"));
        comboBox->setGeometry(QRect(110, 40, 69, 22));
        pushButton = new QPushButton(backoffice1_3_1);
        pushButton->setObjectName(QStringLiteral("pushButton"));
        pushButton->setGeometry(QRect(200, 40, 81, 21));
        pushButton->setAutoFillBackground(false);
        pushButton->setStyleSheet(QLatin1String("background-color:#64e827;\n"
"border-radius: 10px;\n"
"border-color:#64e827;"));
        hometohome = new QPushButton(backoffice1_3_1);
        hometohome->setObjectName(QStringLiteral("hometohome"));
        hometohome->setGeometry(QRect(650, 0, 61, 51));
        QFont font1;
        font1.setPointSize(14);
        hometohome->setFont(font1);
        hometohome->setAutoFillBackground(false);
        hometohome->setStyleSheet(QStringLiteral("background-color:white;"));
        backtoback = new QPushButton(backoffice1_3_1);
        backtoback->setObjectName(QStringLiteral("backtoback"));
        backtoback->setGeometry(QRect(590, 0, 60, 51));
        backtoback->setFont(font1);
        backtoback->setAutoFillBackground(false);
        backtoback->setStyleSheet(QStringLiteral("background-color:white;"));

        retranslateUi(backoffice1_3_1);

        QMetaObject::connectSlotsByName(backoffice1_3_1);
    } // setupUi

    void retranslateUi(QDialog *backoffice1_3_1)
    {
        backoffice1_3_1->setWindowTitle(QApplication::translate("backoffice1_3_1", "Dialog", 0));
        label->setText(QApplication::translate("backoffice1_3_1", "Choose Parking:", 0));
        comboBox->clear();
        comboBox->insertItems(0, QStringList()
         << QApplication::translate("backoffice1_3_1", "Choose", 0)
         << QApplication::translate("backoffice1_3_1", "Parking 1 ", 0)
         << QApplication::translate("backoffice1_3_1", "Parking 2", 0)
         << QApplication::translate("backoffice1_3_1", "Parking 3", 0)
         << QApplication::translate("backoffice1_3_1", "Parking 4", 0)
        );
        pushButton->setText(QApplication::translate("backoffice1_3_1", "SHOW", 0));
        hometohome->setText(QApplication::translate("backoffice1_3_1", "\356\204\217", 0));
        backtoback->setText(QApplication::translate("backoffice1_3_1", "\356\204\216", 0));
    } // retranslateUi

};

namespace Ui {
    class backoffice1_3_1: public Ui_backoffice1_3_1 {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_BACKOFFICE1_3_1_H
