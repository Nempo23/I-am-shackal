FROM python:3.9-slim
# образ для py
RUN apt-get update && apt-get install -y git
# установка гит
RUN pip install flask
# установка flask

WORKDIR /app
# копирование кода внутрь контейнера
COPY . .
# задаем порт для flask
EXPOSE 5000
# инициализация фласка
CMD ["python", "app.py"]
