/********************************************************************************
** Form generated from reading UI file 'backoffice1.ui'
**
** Created by: Qt User Interface Compiler version 5.6.0
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_BACKOFFICE1_H
#define UI_BACKOFFICE1_H

#include <QtCore/QVariant>
#include <QtWidgets/QAction>
#include <QtWidgets/QApplication>
#include <QtWidgets/QButtonGroup>
#include <QtWidgets/QDialog>
#include <QtWidgets/QFrame>
#include <QtWidgets/QHeaderView>
#include <QtWidgets/QLabel>
#include <QtWidgets/QPushButton>

QT_BEGIN_NAMESPACE

class Ui_backoffice1
{
public:
    QPushButton *bo1register;
    QPushButton *bo1deregister;
    QPushButton *bo1activatedeactivate;
    QPushButton *bo1checkstatus;
    QFrame *frame;
    QLabel *datelab;
    QLabel *clocklab;
    QLabel *label_3;
    QFrame *frame_2;
    QPushButton *hometohome;

    void setupUi(QDialog *backoffice1)
    {
        if (backoffice1->objectName().isEmpty())
            backoffice1->setObjectName(QStringLiteral("backoffice1"));
        backoffice1->setWindowModality(Qt::WindowModal);
        backoffice1->setEnabled(true);
        backoffice1->resize(757, 466);
        backoffice1->setStyleSheet(QStringLiteral(""));
        bo1register = new QPushButton(backoffice1);
        bo1register->setObjectName(QStringLiteral("bo1register"));
        bo1register->setGeometry(QRect(60, 180, 310, 101));
        QFont font;
        font.setFamily(QStringLiteral("Segoe UI Light"));
        font.setPointSize(16);
        bo1register->setFont(font);
        bo1register->setAutoFillBackground(false);
        bo1register->setStyleSheet(QLatin1String("background-color:#FDF3E7;\n"
"border-radius: 10px;\n"
"border-color:#FDF3E7;"));
        bo1deregister = new QPushButton(backoffice1);
        bo1deregister->setObjectName(QStringLiteral("bo1deregister"));
        bo1deregister->setGeometry(QRect(390, 320, 310, 101));
        bo1deregister->setFont(font);
        bo1deregister->setAutoFillBackground(false);
        bo1deregister->setStyleSheet(QLatin1String("background-color:#FDF3E7;\n"
"border-radius: 10px;\n"
"border-color:#FDF3E7;"));
        bo1activatedeactivate = new QPushButton(backoffice1);
        bo1activatedeactivate->setObjectName(QStringLiteral("bo1activatedeactivate"));
        bo1activatedeactivate->setGeometry(QRect(390, 180, 310, 101));
        bo1activatedeactivate->setFont(font);
        bo1activatedeactivate->setAutoFillBackground(false);
        bo1activatedeactivate->setStyleSheet(QLatin1String("background-color:#FDF3E7;\n"
"border-radius: 10px;\n"
"border-color:#FDF3E7;"));
        bo1checkstatus = new QPushButton(backoffice1);
        bo1checkstatus->setObjectName(QStringLiteral("bo1checkstatus"));
        bo1checkstatus->setGeometry(QRect(60, 320, 310, 101));
        bo1checkstatus->setFont(font);
        bo1checkstatus->setAutoFillBackground(false);
        bo1checkstatus->setStyleSheet(QLatin1String("background-color:#FDF3E7;\n"
"border-radius: 10px;\n"
"border-color:#FDF3E7;"));
        frame = new QFrame(backoffice1);
        frame->setObjectName(QStringLiteral("frame"));
        frame->setGeometry(QRect(0, 0, 781, 80));
        frame->setStyleSheet(QStringLiteral("background-color:#3B3738;"));
        frame->setFrameShape(QFrame::StyledPanel);
        frame->setFrameShadow(QFrame::Raised);
        datelab = new QLabel(frame);
        datelab->setObjectName(QStringLiteral("datelab"));
        datelab->setGeometry(QRect(640, 40, 111, 31));
        QFont font1;
        font1.setFamily(QStringLiteral("Segoe UI Emoji"));
        font1.setPointSize(12);
        font1.setBold(false);
        font1.setItalic(false);
        font1.setWeight(50);
        datelab->setFont(font1);
        datelab->setStyleSheet(QStringLiteral("color:#fc1414;"));
        clocklab = new QLabel(frame);
        clocklab->setObjectName(QStringLiteral("clocklab"));
        clocklab->setGeometry(QRect(650, 10, 91, 31));
        QFont font2;
        font2.setFamily(QStringLiteral("Segoe UI Emoji"));
        font2.setPointSize(14);
        font2.setBold(false);
        font2.setItalic(false);
        font2.setWeight(50);
        clocklab->setFont(font2);
        clocklab->setStyleSheet(QStringLiteral("color:#fc1414;"));
        label_3 = new QLabel(frame);
        label_3->setObjectName(QStringLiteral("label_3"));
        label_3->setGeometry(QRect(10, 20, 151, 41));
        QSizePolicy sizePolicy(QSizePolicy::Preferred, QSizePolicy::Preferred);
        sizePolicy.setHorizontalStretch(0);
        sizePolicy.setVerticalStretch(0);
        sizePolicy.setHeightForWidth(label_3->sizePolicy().hasHeightForWidth());
        label_3->setSizePolicy(sizePolicy);
        label_3->setMinimumSize(QSize(41, 31));
        QFont font3;
        font3.setFamily(QStringLiteral("Segoe Script"));
        font3.setPointSize(20);
        label_3->setFont(font3);
        label_3->setAutoFillBackground(false);
        label_3->setStyleSheet(QStringLiteral("color:#FDF3E7;"));
        frame_2 = new QFrame(backoffice1);
        frame_2->setObjectName(QStringLiteral("frame_2"));
        frame_2->setGeometry(QRect(0, 80, 761, 391));
        frame_2->setStyleSheet(QStringLiteral("background-color:#C63D0F;"));
        frame_2->setFrameShape(QFrame::StyledPanel);
        frame_2->setFrameShadow(QFrame::Raised);
        hometohome = new QPushButton(frame_2);
        hometohome->setObjectName(QStringLiteral("hometohome"));
        hometohome->setGeometry(QRect(700, 0, 61, 51));
        QFont font4;
        font4.setPointSize(14);
        hometohome->setFont(font4);
        hometohome->setAutoFillBackground(true);
        hometohome->setStyleSheet(QStringLiteral("background-color:white;"));
        frame_2->raise();
        bo1register->raise();
        bo1deregister->raise();
        bo1activatedeactivate->raise();
        bo1checkstatus->raise();
        frame->raise();

        retranslateUi(backoffice1);

        QMetaObject::connectSlotsByName(backoffice1);
    } // setupUi

    void retranslateUi(QDialog *backoffice1)
    {
        backoffice1->setWindowTitle(QApplication::translate("backoffice1", "Parskin ~ Backoffice", 0));
        bo1register->setText(QApplication::translate("backoffice1", "Register", 0));
        bo1deregister->setText(QApplication::translate("backoffice1", "De-Register and Refund", 0));
        bo1activatedeactivate->setText(QApplication::translate("backoffice1", "Activate/Deactivate Pid", 0));
        bo1checkstatus->setText(QApplication::translate("backoffice1", "Check Status", 0));
        datelab->setText(QApplication::translate("backoffice1", "18 March 2017", 0));
        clocklab->setText(QApplication::translate("backoffice1", "12 : 23 : 56", 0));
        label_3->setText(QApplication::translate("backoffice1", "Backoffice", 0));
        hometohome->setText(QApplication::translate("backoffice1", "\356\204\217", 0));
    } // retranslateUi

};

namespace Ui {
    class backoffice1: public Ui_backoffice1 {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_BACKOFFICE1_H
