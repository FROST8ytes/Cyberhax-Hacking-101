FROM node:21-alpine

LABEL Developers="Ammar Farhan Mohamad Rizam (FROST8ytes)"

WORKDIR /app
COPY . .

RUN npm install && npm run build

USER node:node

CMD ["node", "/app/build/index.js"]