# Import the relevant modules
import pyautogui
import time

# Give the py file some time before continuing
time.sleep(1)

# Mouse functions
print(pyautogui.size()) # Print resolution

# Print the current position of the mouse
print(pyautogui.position())


with pyautogui.hold("win"):
    pyautogui.press("r")

pyautogui.moveTo(260, 898, 1)

pyautogui.leftClick()

with pyautogui.hold("ctrl"):
    pyautogui.press("a")

pyautogui.press("backspace")

pyautogui.write("temp")

pyautogui.moveTo(194, 985, 1)

pyautogui.leftClick()

pyautogui.moveTo(960, 520, 1)

with pyautogui.hold("ctrl"):
    pyautogui.press("a")

pyautogui.press("delete")

pyautogui.moveTo(1020, 484, 1)

pyautogui.leftClick()

pyautogui.moveTo(722, 504, 0.5)
time.sleep(1)
pyautogui.click(clicks=2)

pyautogui.moveTo(1020, 542, 0.5)