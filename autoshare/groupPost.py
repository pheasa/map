import pyautogui
from time import sleep
import time
from tqdm import tqdm


my_file = open("groups.txt", "r")
content = my_file.read()
groups = content.split(',')

time.sleep(5)

pyautogui.keyDown('ctrl')
pyautogui.keyDown('t')
pyautogui.keyUp('t')
pyautogui.keyUp('ctrl')

for i in tqdm(range(len(groups)),desc="work on"):
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
print('process is done')
pyautogui.press('hello now is done bye')