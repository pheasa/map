import PySimpleGUI as sg
import os

layout=[
    [sg.Text('កែតម្រូវសំនួរចំលើយ ឫ ផ្ញើរMessage')],
    [sg.Button('សំនួរចំលើយ'),sg.Button('ផ្ញើរ Message')]
]

window=sg.Window('ជ្រើសរើស',layout)
while True:
    event,values = window.read()
    if event == sg.WIN_CLOSED:
        break
    if event == 'សំនួរចំលើយ':
        break
    if event == 'ផ្ញើរ Message':
        window.hide()
        os.system('python message.py')
        break
window.close()