import pyautogui
from time import sleep
import time
from tqdm import tqdm

groups=['2311861852195107','2288223787936482','2213583065576902','2194252724234589','2147462408861535','1928193860808014','1660189910780912','1561605954134114','895817720505106','561480497347637','467916633927217','367783770486622','256142911176516','232164380986457','211776199499486','1202662983253255','2559097434328783']
# https://www.facebook.com/markarianmallkh/posts/1188891904809436?__xts__%5B0%5D=68.ARDAsoN-XyuKRw6LFU7w1F8cJV0KxNrpFXGOHcVp32j3S10pe7p1Sl4MqQozLWhYDZ3gVdX2RsHDucGKgdagfix80ACq4XjTjPLwhJ3dyaLVWevi7COLfScjDoZLQBNEevJjE5x90V2etgtgY1aEpBA0AMfOp_ThJm27f5zwCJa_Ndoygr2UHB6VpQJZhiKJ8vhYJQJJALmTVGO5P64vgW3zrcu78n11uyW5d06Ool9a598KJlQFYYzmjUOoemsH7hn7CI-PblSgq8APEjCED79rJMVKA_rI9PeoIAsFtHpFjGDHJKQ6MSDYFjoJmX1H1rAoV2SjAdda4c-xfcjCyxCUCA&__tn__=-R

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
pyautogui.press('f')