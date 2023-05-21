class Vitals{

  constructor(){
    this.id = ''
    this.patient_id = ''
    this.date_time = ''
    this.temperature = ''
    this.blood_pressure = ''
    this.heart_rate = ''
    this.respiratory_rate = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/vitals.php?id=' + this.id + '&patient_id=' + this.patient_id + '&date_time=' + this.date_time + '&temperature=' + this.temperature + '&blood_pressure=' + this.blood_pressure + '&heart_rate=' + this.heart_rate + '&respiratory_rate=' + this.respiratory_rate + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/vitals.php?id=' + this.id + '&patient_id=' + this.patient_id + '&date_time=' + this.date_time + '&temperature=' + this.temperature + '&blood_pressure=' + this.blood_pressure + '&heart_rate=' + this.heart_rate + '&respiratory_rate=' + this.respiratory_rate + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/vitals.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/vitals.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/vitals.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/vitals.php?getById=' + this.id)); }catch(err){}}
  async getByPatient_id(){ try{ eval(await this.request('controller/vitals.php?getByPatient_id=' + this.patient_id)); }catch(err){}}
  async getByDate_time(){ try{ eval(await this.request('controller/vitals.php?getByDate_time=' + this.date_time)); }catch(err){}}
  async getByTemperature(){ try{ eval(await this.request('controller/vitals.php?getByTemperature=' + this.temperature)); }catch(err){}}
  async getByBlood_pressure(){ try{ eval(await this.request('controller/vitals.php?getByBlood_pressure=' + this.blood_pressure)); }catch(err){}}
  async getByHeart_rate(){ try{ eval(await this.request('controller/vitals.php?getByHeart_rate=' + this.heart_rate)); }catch(err){}}
  async getByRespiratory_rate(){ try{ eval(await this.request('controller/vitals.php?getByRespiratory_rate=' + this.respiratory_rate)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/vitals.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/vitals.php?id=' + this.id + '&patient_id=' + this.patient_id + '&date_time=' + this.date_time + '&temperature=' + this.temperature + '&blood_pressure=' + this.blood_pressure + '&heart_rate=' + this.heart_rate + '&respiratory_rate=' + this.respiratory_rate + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/vitals.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/vitals.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/vitals.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setPatient_id(patient_id){ this.patient_id = patient_id; }
  setDate_time(date_time){ this.date_time = date_time; }
  setTemperature(temperature){ this.temperature = temperature; }
  setBlood_pressure(blood_pressure){ this.blood_pressure = blood_pressure; }
  setHeart_rate(heart_rate){ this.heart_rate = heart_rate; }
  setRespiratory_rate(respiratory_rate){ this.respiratory_rate = respiratory_rate; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getPatient_id(){ return this.patient_id; }
  getDate_time(){ return this.date_time; }
  getTemperature(){ return this.temperature; }
  getBlood_pressure(){ return this.blood_pressure; }
  getHeart_rate(){ return this.heart_rate; }
  getRespiratory_rate(){ return this.respiratory_rate; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/vitals.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
