import PySimpleGUI as sg
import time
import pyautogui
from time import sleep
import time
from tqdm import tqdm

my_file = open("groups.txt", "r")
content = my_file.read()
groups = content.split(',')

# mylist = [1,2,3,4,5,6,7,8]



progressbar = [
    [sg.ProgressBar(len(groups), orientation='h', size=(24, 10), key='progressbar')]
]
outputwin = [
    [sg.Output(size=(35,30),key='-OUTPUT-')]
]
layout = [
    [sg.Frame('ដំណើការ',layout= progressbar)],
    [sg.Frame('កំពុងធ្វើការ', layout = outputwin)],
    [sg.Submit('ចាប់ផ្ដើម'),sg.Cancel(),sg.Submit('អានព័តមាន'),]
]
window = sg.Window('Auto post in facebook', layout)
progress_bar = window['progressbar']
while True:
    event, values = window.read(timeout=10)
    if event == 'Cancel'  or event is None:
        break
    elif event == 'ចាប់ផ្ដើម':
        window['-OUTPUT-'].update('')
        progress_bar.UpdateBar(0)
        time.sleep(5)
        pyautogui.keyDown('ctrl')
        pyautogui.keyDown('t')
        pyautogui.keyUp('t')
        pyautogui.keyUp('ctrl')

        for i in range(len(groups)):
            link = 'https://facebook.com/groups/'+groups[i]
            pyautogui.typewrite(link)
            pyautogui.typewrite('\n')
            time.sleep(16)

            pyautogui.typewrite('p')
            time.sleep(1)
            # paste
            pyautogui.hotkey('ctrl','v')
            time.sleep(8)
            # delete all
            pyautogui.hotkey('ctrl','a')
            pyautogui.press('delete')
            # time.sleep(5)

            pyautogui.keyDown('ctrl')
            pyautogui.keyDown('enter')
            pyautogui.keyUp('enter')
            pyautogui.keyUp('ctrl')

            time.sleep(3)
            pyautogui.write(['f6'])
            time.sleep(1)
            print("id=" + groups[i] + "-ធ្វើរួចរាល់")
            progress_bar.UpdateBar(i + 1)
        print('process is done')
        print("សរុបទាំងអស់៖" ,len(groups),"Group")

    elif event == "អានព័តមាន":
        window['-OUTPUT-'].update('')
        print('នេះ​គឺ​កម្មវិធីសម្រាប់Share post ទៅកាន់groupជាច្រើ')
        print('ដើម្បី​​ដំណើ​ការ​ទៅ​​បាន​​ត្រូវ​​អនុវត្ត​ដូច​​ខាង​​ក្រោម')
        
window.close()