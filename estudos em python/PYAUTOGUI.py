# Import the relevant modules
import pyautogui
import time

# Give the py file some time before continuing
time.sleep(3)

# Mouse functions
print(pyautogui.size()) # Print resolution

# Print the current position of the mouse
print(pyautogui.position())

# Moves the mouse over time (3 seconds)
pyautogui.moveTo(100, 100, 3)

# Moves the mouse relative to its current position (3 seconds)
pyautogui.moveRel(100, 100, 3)

#Click
pyautogui.click(500, 500, 3, 3, button="left")