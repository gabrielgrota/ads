import pyautogui
import time

time.sleep(1)

count = 0

while count < 10:
    pyautogui.keyDown("alt")
    pyautogui.press("tab")
    pyautogui.keyUp("alt")

    pyautogui.keyDown("alt")
    pyautogui.press("f4")

    time.sleep(2)

    count +=1

pyautogui.press("win")