import pyautogui
import time
import PySimpleGUI as sg

my_file = open("groups.txt", "r")
content = my_file.read()
groups = content.split(',')