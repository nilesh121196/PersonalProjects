/********************************************************************************
** Form generated from reading UI file 'loginmain.ui'
**
** Created by: Qt User Interface Compiler version 5.6.0
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_LOGINMAIN_H
#define UI_LOGINMAIN_H

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

class Ui_LoginMain
{
public:
    QPushButton *backoffice_btn;
    QLabel *label_2;
    QFrame *frame_2;
    QLabel *label;
    QLabel *label_4;
    QFrame *frame;
    QLabel *label_3;
    QLabel *clocklab;
    QLabel *datelab;
    QPushButton *book_btn;

    void setupUi(QDialog *LoginMain)
    {
        if (LoginMain->objectName().isEmpty())
            LoginMain->setObjectName(QStringLiteral("LoginMain"));
        LoginMain->resize(757, 466);
        QSizePolicy sizePolicy(QSizePolicy::Fixed, QSizePolicy::Fixed);
        sizePolicy.setHorizontalStretch(0);
        sizePolicy.setVerticalStretch(0);
        sizePolicy.setHeightForWidth(LoginMain->sizePolicy().hasHeightForWidth());
        LoginMain->setSizePolicy(sizePolicy);
        LoginMain->setStyleSheet(QStringLiteral(""));
        backoffice_btn = new QPushButton(LoginMain);
        backoffice_btn->setObjectName(QStringLiteral("backoffice_btn"));
        backoffice_btn->setGeometry(QRect(50, 330, 310, 101));
        QFont font;
        font.setFamily(QStringLiteral("Segoe UI Light"));
        font.setPointSize(16);
        backoffice_btn->setFont(font);
        backoffice_btn->setAutoFillBackground(false);
        backoffice_btn->setStyleSheet(QLatin1String("background-color:#ffc02d;\n"
"border-radius: 10px;\n"
"border-color:#ffc02d;"));
        label_2 = new QLabel(LoginMain);
        label_2->setObjectName(QStringLiteral("label_2"));
        label_2->setEnabled(true);
        label_2->setGeometry(QRect(50, 400, 311, 20));
        QFont font1;
        font1.setFamily(QStringLiteral("Segoe Script"));
        label_2->setFont(font1);
        label_2->setStyleSheet(QStringLiteral("color:white;"));
        frame_2 = new QFrame(LoginMain);
        frame_2->setObjectName(QStringLiteral("frame_2"));
        frame_2->setGeometry(QRect(0, 80, 761, 391));
        frame_2->setStyleSheet(QStringLiteral("background-color:#7E8F7C;"));
        frame_2->setFrameShape(QFrame::StyledPanel);
        frame_2->setFrameShadow(QFrame::Raised);
        label = new QLabel(frame_2);
        label->setObjectName(QStringLiteral("label"));
        label->setGeometry(QRect(260, 10, 201, 81));
        QFont font2;
        font2.setFamily(QStringLiteral("Segoe Script"));
        font2.setPointSize(26);
        label->setFont(font2);
        label_4 = new QLabel(LoginMain);
        label_4->setObjectName(QStringLiteral("label_4"));
        label_4->setGeometry(QRect(460, 400, 191, 20));
        label_4->setFont(font1);
        label_4->setStyleSheet(QStringLiteral("color:white;"));
        frame = new QFrame(LoginMain);
        frame->setObjectName(QStringLiteral("frame"));
        frame->setGeometry(QRect(-40, 0, 841, 81));
        frame->setStyleSheet(QStringLiteral("background-color:#3B3738;"));
        frame->setFrameShape(QFrame::StyledPanel);
        frame->setFrameShadow(QFrame::Plain);
        label_3 = new QLabel(frame);
        label_3->setObjectName(QStringLiteral("label_3"));
        label_3->setGeometry(QRect(50, 20, 121, 41));
        QSizePolicy sizePolicy1(QSizePolicy::Preferred, QSizePolicy::Preferred);
        sizePolicy1.setHorizontalStretch(0);
        sizePolicy1.setVerticalStretch(0);
        sizePolicy1.setHeightForWidth(label_3->sizePolicy().hasHeightForWidth());
        label_3->setSizePolicy(sizePolicy1);
        label_3->setMinimumSize(QSize(41, 31));
        QFont font3;
        font3.setFamily(QStringLiteral("Segoe Script"));
        font3.setPointSize(20);
        label_3->setFont(font3);
        label_3->setAutoFillBackground(false);
        label_3->setStyleSheet(QStringLiteral("color:#FDF3E7;"));
        clocklab = new QLabel(frame);
        clocklab->setObjectName(QStringLiteral("clocklab"));
        clocklab->setGeometry(QRect(690, 10, 91, 31));
        QFont font4;
        font4.setFamily(QStringLiteral("Segoe UI Emoji"));
        font4.setPointSize(14);
        font4.setBold(false);
        font4.setItalic(false);
        font4.setWeight(50);
        clocklab->setFont(font4);
        clocklab->setStyleSheet(QStringLiteral("color:#fc1414;"));
        datelab = new QLabel(frame);
        datelab->setObjectName(QStringLiteral("datelab"));
        datelab->setGeometry(QRect(680, 40, 111, 31));
        QFont font5;
        font5.setFamily(QStringLiteral("Segoe UI Emoji"));
        font5.setPointSize(12);
        font5.setBold(false);
        font5.setItalic(false);
        font5.setWeight(50);
        datelab->setFont(font5);
        datelab->setStyleSheet(QStringLiteral("color:#fc1414;"));
        book_btn = new QPushButton(LoginMain);
        book_btn->setObjectName(QStringLiteral("book_btn"));
        book_btn->setGeometry(QRect(400, 330, 310, 101));
        book_btn->setFont(font);
        book_btn->setAutoFillBackground(false);
        book_btn->setStyleSheet(QLatin1String("background-color:#ffc02d;\n"
"border-radius: 10px;\n"
"border-color:#ffc02d;"));
        frame_2->raise();
        frame->raise();
        book_btn->raise();
        backoffice_btn->raise();
        label_2->raise();
        label_4->raise();

        retranslateUi(LoginMain);

        QMetaObject::connectSlotsByName(LoginMain);
    } // setupUi

    void retranslateUi(QDialog *LoginMain)
    {
        LoginMain->setWindowTitle(QApplication::translate("LoginMain", "Parsin ~ Home", 0));
        backoffice_btn->setText(QApplication::translate("LoginMain", "Backoffice", 0));
        label_2->setText(QApplication::translate("LoginMain", "  Registration | Status | Act/DeAct | Cancel/Refund", 0));
        label->setText(QApplication::translate("LoginMain", "Dashboard", 0));
        label_4->setText(QApplication::translate("LoginMain", "Guest Registration and Booking", 0));
        label_3->setText(QApplication::translate("LoginMain", "Parskin ", 0));
        clocklab->setText(QApplication::translate("LoginMain", "12 : 23 : 56", 0));
        datelab->setText(QApplication::translate("LoginMain", "18 March 2017", 0));
        book_btn->setText(QApplication::translate("LoginMain", "Booking", 0));
    } // retranslateUi

};

namespace Ui {
    class LoginMain: public Ui_LoginMain {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_LOGINMAIN_H
