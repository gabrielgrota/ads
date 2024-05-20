import pyautogui
import time

time.sleep(1)

with pyautogui.hold("win"):
    pyautogui.press("r")

pyautogui.press("backspace")

pyautogui.write("recent")

pyautogui.press("enter")

with pyautogui.hold("ctrl"):
    pyautogui.press("a")

pyautogui.press("delete")

""" pyautogui.press("up") """

""" pyautogui.press("enter")

pyautogui.press("down")

pyautogui.press("right")

pyautogui.press("enter")

pyautogui.press("up")
pyautogui.press("enter")
pyautogui.press("down")
pyautogui.press("right")
pyautogui.press("enter") """




"""




pyautogui.moveTo(1020, 484, 1)

pyautogui.leftClick()

pyautogui.moveTo(722, 504, 0.5)
time.sleep(1)
pyautogui.click(clicks=2)

pyautogui.moveTo(1020, 542, 0.5) """