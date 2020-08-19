import PySimpleGUI as sg
import pyautogui
import time
import pyperclip

import codecs
my_file = codecs.open("answer.txt", "r",'utf8')
content = my_file.read()
radio_choices = content.split(',')
# sg.theme('DarkAmber')   # Add a touch of color
# All the stuff inside your window.
# radio_choices = ['បាទសួរស្ដី', 'បាទបង', 'មានអ្វីដែរខ្ញុំអាចជួយបានទេ?', 'អគុណបង','ខាងខ្ញុំនិងទាក់ទងទៅបងនៅពេលក្រោយវិញ','អីវាន់បានផ្ញើររួច​ហើយបង']
# loop buttom from text
radio = [[sg.Button(text)] for text in radio_choices]
# layout = [[sg.Text('My layout')]] + radio + [[sg.OK()]]


layout = [  
            [sg.Text('សូមជ្រើសរើសMessage')],
            ]+radio

# Create the Window
window = sg.Window('Ez Reply', layout ,size=(300,500),icon=('icon.ico'))
# Event Loop to process "events" and get the "values" of the inputs
while True:
    event, values = window.read()
    if event == sg.WIN_CLOSED or event == 'Cancel': # if user closes window or clicks cancel
        break
    # time.sleep(1)
    pyautogui.hotkey('alt','tab')
    time.sleep(1)
    pyperclip.copy(event)
    pyautogui.hotkey('ctrl','v')
    time.sleep(1)
    pyautogui.press('enter')

window.close()