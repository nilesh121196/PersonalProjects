/********************************************************************************
** Form generated from reading UI file 'mainwindow.ui'
**
** Created by: Qt User Interface Compiler version 5.6.0
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_MAINWINDOW_H
#define UI_MAINWINDOW_H

#include <QtCore/QVariant>
#include <QtWidgets/QAction>
#include <QtWidgets/QApplication>
#include <QtWidgets/QButtonGroup>
#include <QtWidgets/QFrame>
#include <QtWidgets/QHeaderView>
#include <QtWidgets/QLabel>
#include <QtWidgets/QLineEdit>
#include <QtWidgets/QMainWindow>
#include <QtWidgets/QPushButton>
#include <QtWidgets/QStatusBar>
#include <QtWidgets/QToolBar>
#include <QtWidgets/QWidget>

QT_BEGIN_NAMESPACE

class Ui_MainWindow
{
public:
    QWidget *centralWidget;
    QPushButton *loginbutton;
    QLineEdit *loginusername;
    QLineEdit *loginpassword;
    QFrame *frame;
    QLabel *label;
    QToolBar *mainToolBar;
    QStatusBar *statusBar;

    void setupUi(QMainWindow *MainWindow)
    {
        if (MainWindow->objectName().isEmpty())
            MainWindow->setObjectName(QStringLiteral("MainWindow"));
        MainWindow->resize(271, 353);
        QSizePolicy sizePolicy(QSizePolicy::Fixed, QSizePolicy::Fixed);
        sizePolicy.setHorizontalStretch(0);
        sizePolicy.setVerticalStretch(0);
        sizePolicy.setHeightForWidth(MainWindow->sizePolicy().hasHeightForWidth());
        MainWindow->setSizePolicy(sizePolicy);
        MainWindow->setAutoFillBackground(true);
        MainWindow->setStyleSheet(QStringLiteral(""));
        centralWidget = new QWidget(MainWindow);
        centralWidget->setObjectName(QStringLiteral("centralWidget"));
        loginbutton = new QPushButton(centralWidget);
        loginbutton->setObjectName(QStringLiteral("loginbutton"));
        loginbutton->setGeometry(QRect(64, 223, 151, 31));
        QFont font;
        font.setFamily(QStringLiteral("Segoe UI Semilight"));
        font.setPointSize(10);
        font.setBold(false);
        font.setWeight(50);
        loginbutton->setFont(font);
        loginbutton->setAutoFillBackground(false);
        loginbutton->setStyleSheet(QLatin1String("border-radius: 10px;\n"
"border-color:#64e827;\n"
"background-color:#4ad32e;\n"
"color:white;"));
        loginusername = new QLineEdit(centralWidget);
        loginusername->setObjectName(QStringLiteral("loginusername"));
        loginusername->setEnabled(true);
        loginusername->setGeometry(QRect(64, 133, 151, 31));
        QFont font1;
        font1.setFamily(QStringLiteral("Segoe UI Light"));
        loginusername->setFont(font1);
        loginusername->setStyleSheet(QLatin1String("border-radius: 10px;\n"
"border-color:#64e827;"));
        loginusername->setInputMethodHints(Qt::ImhSensitiveData);
        loginusername->setReadOnly(false);
        loginpassword = new QLineEdit(centralWidget);
        loginpassword->setObjectName(QStringLiteral("loginpassword"));
        loginpassword->setGeometry(QRect(64, 173, 151, 31));
        loginpassword->setFont(font1);
        loginpassword->setAutoFillBackground(false);
        loginpassword->setStyleSheet(QLatin1String("border-radius: 10px;\n"
"border-color:#64e827;"));
        loginpassword->setEchoMode(QLineEdit::Password);
        frame = new QFrame(centralWidget);
        frame->setObjectName(QStringLiteral("frame"));
        frame->setEnabled(false);
        frame->setGeometry(QRect(10, 10, 255, 311));
        frame->setStyleSheet(QLatin1String("border-radius: 10px;\n"
"background-color:black;"));
        frame->setFrameShape(QFrame::StyledPanel);
        frame->setFrameShadow(QFrame::Raised);
        label = new QLabel(frame);
        label->setObjectName(QStringLiteral("label"));
        label->setGeometry(QRect(100, 20, 61, 81));
        QFont font2;
        font2.setFamily(QStringLiteral("Segoe UI Semilight"));
        font2.setPointSize(14);
        label->setFont(font2);
        label->setStyleSheet(QStringLiteral("color:white;"));
        MainWindow->setCentralWidget(centralWidget);
        frame->raise();
        loginbutton->raise();
        loginpassword->raise();
        loginusername->raise();
        mainToolBar = new QToolBar(MainWindow);
        mainToolBar->setObjectName(QStringLiteral("mainToolBar"));
        MainWindow->addToolBar(Qt::TopToolBarArea, mainToolBar);
        statusBar = new QStatusBar(MainWindow);
        statusBar->setObjectName(QStringLiteral("statusBar"));
        MainWindow->setStatusBar(statusBar);

        retranslateUi(MainWindow);

        QMetaObject::connectSlotsByName(MainWindow);
    } // setupUi

    void retranslateUi(QMainWindow *MainWindow)
    {
        MainWindow->setWindowTitle(QApplication::translate("MainWindow", "Parskin ~ Login", 0));
#ifndef QT_NO_ACCESSIBILITY
        MainWindow->setAccessibleDescription(QString());
#endif // QT_NO_ACCESSIBILITY
        loginbutton->setText(QApplication::translate("MainWindow", "LOGIN", 0));
        loginusername->setPlaceholderText(QApplication::translate("MainWindow", "Username", 0));
        loginpassword->setPlaceholderText(QApplication::translate("MainWindow", "Password", 0));
        label->setText(QApplication::translate("MainWindow", " Login\n"
"    to\n"
"Parskin", 0));
    } // retranslateUi

};

namespace Ui {
    class MainWindow: public Ui_MainWindow {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_MAINWINDOW_H
