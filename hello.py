from PIL import Image
import pytesseract
text=pytesseract.image_to_string(Image.open("tximage9.png"))
print(text)


# from google.colab.patches import cv2_imshow
# img = cv2.imread('sign_board.jpg')
# cv2_imshow(img)
# import torch
# torch.cuda.is_available()
# import easyocr
# import cv2
# from matplotlib import pyplot as plt
# import numpy as np
# img='tximage7.png'
# reader=easyocr.Reader(['en'],gpu=False)
# result=reader.readtext(img)
# print(result)
# print("hi")