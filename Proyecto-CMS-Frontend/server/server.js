import express from 'express';
import { envs, Client }  from 'stytch';
import dotenv from 'dotenv';
import cors from 'cors';

dotenv.config();

const app = express();

const client = new Client({
    project_id: process.env.PROJECT_ID,
    secret: process.env.SECRET,
    env: envs.test
})